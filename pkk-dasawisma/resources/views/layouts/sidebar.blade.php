<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <div class="sidebar-brand">
      <a href="{{ url('/dashboard') }}" class="brand-link">
          <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" />
          <span class="brand-text fw-light">Silalahi Dolok</span>
      </a>
  </div>
  <div class="sidebar-wrapper">
      <nav class="mt-2">
          <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation" aria-label="Main navigation" data-accordion="false" id="navigation">
              <li class="nav-item menu-open">
                  <a href="#" class="nav-link active">
                      <i class="nav-icon bi bi-speedometer"></i>
                      <p>Dashboard <i class="nav-arrow bi bi-chevron-right"></i></p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ url('/dashboard') }}" class="nav-link active">
                              <i class="nav-icon bi bi-circle"></i>
                              <p>Dashboard v1</p>
                          </a>
                      </li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a href="{{ url('/roles') }}" class="nav-link">
                      <i class="nav-icon bi bi-palette"></i>
                      <p>Roles</p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/users') }}" class="nav-link">
                    <i class="nav-icon bi bi-palette"></i>
                    <p>User</p>
                </a>
            </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-box-seam-fill"></i>
                      <p>Widgets <i class="nav-arrow bi bi-chevron-right"></i></p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ url('/widgets/small-box') }}" class="nav-link">
                              <i class="nav-icon bi bi-circle"></i>
                              <p>Small Box</p>
                          </a>
                      </li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-clipboard-fill"></i>
                      <p>Layout Options <span class="nav-badge badge text-bg-secondary me-3">6</span><i class="nav-arrow bi bi-chevron-right"></i></p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ url('/layout/unfixed-sidebar') }}" class="nav-link">
                              <i class="nav-icon bi bi-circle"></i>
                              <p>Default Sidebar</p>
                          </a>
                      </li>
                    </ul>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-tree-fill"></i>
                      <p>UI Elements <i class="nav-arrow bi bi-chevron-right"></i></p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ url('/UI/general') }}" class="nav-link">
                              <i class="nav-icon bi bi-circle"></i>
                              <p>General</p>
                          </a>
                      </li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-pencil-square"></i>
                      <p>Forms <i class="nav-arrow bi bi-chevron-right"></i></p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ url('/forms/general') }}" class="nav-link">
                              <i class="nav-icon bi bi-circle"></i>
                              <p>General Elements</p>
                          </a>
                      </li>
                  </ul>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-table"></i>
                      <p>Tables <i class="nav-arrow bi bi-chevron-right"></i></p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ url('/tables/simple') }}" class="nav-link">
                              <i class="nav-icon bi bi-circle"></i>
                              <p>Simple Tables</p>
                          </a>
                      </li>
                  </ul>
              </li>
              <li class="nav-header">EXAMPLES</li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-box-arrow-in-right"></i>
                      <p>Auth <i class="nav-arrow bi bi-chevron-right"></i></p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon bi bi-box-arrow-in-right"></i>
                              <p>Version 1 <i class="nav-arrow bi bi-chevron-right"></i></p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="{{ url('/examples/login') }}" class="nav-link">
                                      <i class="nav-icon bi bi-circle"></i>
                                      <p>Login</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ url('/examples/register') }}" class="nav-link">
                                      <i class="nav-icon bi bi-circle"></i>
                                      <p>Register</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
                              <i class="nav-icon bi bi-box-arrow-in-right"></i>
                              <p>Version 2 <i class="nav-arrow bi bi-chevron-right"></i></p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="{{ url('/examples/login-v2') }}" class="nav-link">
                                      <i class="nav-icon bi bi-circle"></i>
                                      <p>Login</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="{{ url('/examples/register-v2') }}" class="nav-link">
                                      <i class="nav-icon bi bi-circle"></i>
                                      <p>Register</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item">
                          <a href="{{ url('/examples/lockscreen') }}" class="nav-link">
                              <i class="nav-icon bi bi-circle"></i>
                              <p>Lockscreen</p>
                          </a>
                      </li>
                  </ul>
                </li>
                  </ul>
          </ul>
      </nav>
  </div>
</aside>

<script>
  const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
  const Default = {
      scrollbarTheme: 'os-theme-light',
      scrollbarAutoHide: 'leave',
      scrollbarClickScroll: true,
  };
  document.addEventListener('DOMContentLoaded', function () {
      const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
      if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
              scrollbars: {
                  theme: Default.scrollbarTheme,
                  autoHide: Default.scrollbarAutoHide,
                  clickScroll: Default.scrollbarClickScroll,
              },
          });
      }
  });
</script>