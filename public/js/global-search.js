// Global Search Manager
class PejabatSearchManager {
    constructor() {
        this.allPejabat = [];
        this.init();
    }

    async init() {
        await this.loadSearchData();
        this.createGlobalSearch();
        this.handleUrlSearch();
    }

    async loadSearchData() {
        try {
            const response = await fetch('/api/pejabat/all');
            this.allPejabat = await response.json();
        } catch (error) {
            console.error('Failed to load search data:', error);
            this.allPejabat = [];
        }
    }

    createGlobalSearch() {
        const navbar = document.querySelector('nav .container');
        if (!navbar) return;

        const searchHTML = `
            <div class="hidden lg:block ml-4 relative">
                <div class="relative">
                    <input type="text"
                           id="global-pejabat-search"
                           placeholder="Cari pejabat..."
                           class="w-64 px-4 py-2 pl-10 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-2.5 text-gray-400 text-sm"></i>
                </div>
                <div id="global-search-results" class="absolute z-50 w-64 mt-1 bg-white rounded-lg shadow-xl hidden border border-gray-200 max-h-96 overflow-y-auto">
                    <!-- Results will be populated here -->
                </div>
            </div>
        `;

        const menuContainer = navbar.querySelector('.hidden.lg\\:flex');
        if (menuContainer) {
            menuContainer.insertAdjacentHTML('beforeend', searchHTML);
            this.attachSearchEvents();
        }
    }

    attachSearchEvents() {
        const searchInput = document.getElementById('global-pejabat-search');
        const resultsContainer = document.getElementById('global-search-results');

        if (!searchInput || !resultsContainer) return;

        searchInput.addEventListener('input', (e) => {
            const term = e.target.value.toLowerCase();
            if (term.length >= 2) {
                const results = this.searchPejabat(term);
                this.showResults(results, resultsContainer);
            } else {
                resultsContainer.classList.add('hidden');
            }
        });

        searchInput.addEventListener('focus', () => {
            if (searchInput.value.length >= 2) {
                const results = this.searchPejabat(searchInput.value.toLowerCase());
                this.showResults(results, resultsContainer);
            }
        });

        document.addEventListener('click', (e) => {
            if (!e.target.closest('#global-pejabat-search') && !e.target.closest('#global-search-results')) {
                resultsContainer.classList.add('hidden');
            }
        });
    }

    searchPejabat(term) {
        return this.allPejabat.filter(p =>
            p.nama.toLowerCase().includes(term) ||
            p.nip.includes(term) ||
            p.jabatan.toLowerCase().includes(term)
        );
    }

    showResults(results, container) {
        if (results.length === 0) {
            container.innerHTML = '<div class="p-4 text-center text-gray-500 text-sm">Tidak ditemukan</div>';
            container.classList.remove('hidden');
            return;
        }

        const resultsHTML = results.map(p => `
            <a href="${p.pageUrl}?search=${encodeURIComponent(p.nama)}"
               class="block px-4 py-3 hover:bg-blue-50 border-b border-gray-100 last:border-b-0 group">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full overflow-hidden bg-gray-100 flex-shrink-0">
                        <img src="${p.foto}" alt="${p.nama}" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-medium text-gray-800 text-sm truncate group-hover:text-blue-600">${p.nama}</h4>
                        <p class="text-xs text-gray-500 truncate">${p.jabatan}</p>
                    </div>
                </div>
            </a>
        `).join('');

        container.innerHTML = resultsHTML;
        container.classList.remove('hidden');
    }

    handleUrlSearch() {
        const urlParams = new URLSearchParams(window.location.search);
        const search = urlParams.get('search');

        if (search) {
            const searchInput = document.getElementById('search-pejabat');
            if (searchInput) {
                searchInput.value = search;
                const event = new Event('input', { bubbles: true });
                searchInput.dispatchEvent(event);
            }
        }
    }
}

// Initialize on all pages except pejabat pages
document.addEventListener('DOMContentLoaded', () => {
    if (!window.location.pathname.includes('/pejabat')) {
        window.pejabatSearch = new PejabatSearchManager();
    }
});
