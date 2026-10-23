
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — SPTRDITZ COLLECTION</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="admin-body">

@php
    $ownerName = $owner->name ?? 'Owner';
    $ownerEmail = $owner->email ?? '';
    $initial = strtoupper(substr($ownerName, 0, 1));
@endphp

<div class="admin-layout">

    <aside class="admin-sidebar">
        <a href="{{ route('admin.dashboard') }}" class="admin-brand">
            <span class="brand-symbol">SD</span>
            <span class="brand-copy">
                <strong>SPTRDITZ</strong>
                <small>COLLECTION</small>
            </span>
        </a>

        <div class="sidebar-section-label">WORKSPACE</div>

        <nav class="sidebar-nav">
            <a href="{{ route('admin.dashboard') }}" class="nav-item active">
                <span class="nav-icon">▦</span>
                <span>Dashboard</span>
                <span class="nav-indicator"></span>
            </a>

            <a href="#products" class="nav-item">
                <span class="nav-icon">◇</span>
                <span>Products</span>
                <span class="nav-arrow">↗</span>
            </a>

            <a href="#content" class="nav-item">
                <span class="nav-icon">▤</span>
                <span>Website Content</span>
                <span class="nav-arrow">↗</span>
            </a>

            <div class="sidebar-section-label sidebar-section-spaced">SYSTEM</div>

            <a href="#settings" class="nav-item">
                <span class="nav-icon">⚙</span>
                <span>Settings</span>
                <span class="nav-arrow">↗</span>
            </a>
        </nav>

        <div class="sidebar-bottom">
            <div class="system-status">
                <span class="status-dot"></span>
                <div>
                    <strong>LOCAL ENVIRONMENT</strong>
                    <small>Admin system online</small>
                </div>
            </div>

            <div class="sidebar-owner">
                <div class="owner-avatar">{{ $initial }}</div>
                <div class="owner-details">
                    <strong>{{ $ownerName }}</strong>
                    <small>OWNER ACCESS</small>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button class="logout-button" type="submit" title="Sign out" aria-label="Sign out">↗</button>
                </form>
            </div>
        </div>
    </aside>

    <main class="admin-main">
        <header class="topbar">
            <div class="breadcrumb">
                <span>SPTRDITZ</span>
                <span class="breadcrumb-divider">/</span>
                <strong>Dashboard</strong>
            </div>

            <div class="topbar-right">
                <span class="topbar-status"><span class="status-dot"></span> SYSTEM ONLINE</span>
                <div class="topbar-avatar">{{ $initial }}</div>
            </div>
        </header>

        <div class="dashboard-content">

            <section class="welcome-section">
                <div>
                    <div class="eyebrow"><span></span> OWNER CONTROL CENTER</div>
                    <h1>Welcome back<span class="silver-dot">.</span></h1>
                    <p class="welcome-description">
                        Your brand. Your vision. Your control.
                        <span>Manage the SPTRDITZ digital experience from one place.</span>
                    </p>
                </div>

                <div class="welcome-mark">
                    <span>SD</span>
                    <small>EST. 2024</small>
                </div>
            </section>

            <section class="section-heading">
                <div>
                    <span class="section-kicker">OVERVIEW</span>
                    <h2>Workspace overview</h2>
                </div>
                <span class="overview-label">ADMINISTRATION <span> / </span> MAIN</span>
            </section>

            <section class="stats-grid">
                <article class="stat-card stat-card-featured">
                    <div class="stat-card-top">
                        <span class="stat-label">BRAND STATUS</span>
                        <span class="stat-icon">✳</span>
                    </div>
                    <div class="stat-value stat-value-text">Operational</div>
                    <div class="stat-bottom">
                        <span class="mini-status-dot"></span>
                        <span>Admin access is active</span>
                    </div>
                    <div class="stat-decoration"></div>
                </article>

                <article class="stat-card">
                    <div class="stat-card-top">
                        <span class="stat-label">PRODUCT MANAGEMENT</span>
                        <span class="stat-icon">◇</span>
                    </div>
                    <div class="stat-value stat-value-text">Products</div>
                    <div class="stat-bottom">
                        <span>Manage your product catalog</span>
                    </div>
                    <a href="#products" class="stat-link">OPEN MODULE <span>↗</span></a>
                </article>

                <article class="stat-card">
                    <div class="stat-card-top">
                        <span class="stat-label">WEBSITE CONTENT</span>
                        <span class="stat-icon">▤</span>
                    </div>
                    <div class="stat-value stat-value-text">Content</div>
                    <div class="stat-bottom">
                        <span>Keep your brand experience consistent</span>
                    </div>
                    <a href="#content" class="stat-link">VIEW MODULE <span>↗</span></a>
                </article>

                <article class="stat-card">
                    <div class="stat-card-top">
                        <span class="stat-label">OWNER ACCOUNT</span>
                        <span class="stat-icon">◎</span>
                    </div>
                    <div class="stat-value stat-value-text">Verified</div>
                    <div class="stat-bottom">
                        <span>{{ $ownerEmail }}</span>
                    </div>
                    <div class="stat-tag">OWNER PRIVILEGES</div>
                </article>
            </section>

            <section class="main-panels">
                <article class="panel brand-panel">
                    <div class="panel-heading">
                        <div>
                            <span class="section-kicker">BRAND IDENTITY</span>
                            <h2>SPTRDITZ COLLECTION</h2>
                        </div>
                        <span class="panel-symbol">SD</span>
                    </div>

                    <div class="brand-visual">
                        <div class="visual-grid"></div>
                        <div class="visual-orbit orbit-one"></div>
                        <div class="visual-orbit orbit-two"></div>
                        <div class="visual-center-mark">SD</div>
                        <div class="visual-caption">MORE THAN JUST CLOTHES.</div>
                        <div class="visual-index">SD / 001</div>
                    </div>

                    <div class="brand-panel-footer">
                        <div>
                            <strong>Built with intention.</strong>
                            <span>A digital home for the SPTRDITZ vision.</span>
                        </div>
                        <span class="brand-footer-est">EST. 2024</span>
                    </div>
                </article>

                <article class="panel activity-panel">
                    <div class="panel-heading">
                        <div>
                            <span class="section-kicker">SYSTEM</span>
                            <h2>Admin activity</h2>
                        </div>
                        <span class="activity-live"><span class="status-dot"></span> LIVE</span>
                    </div>

                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon">✓</div>
                            <div class="activity-copy">
                                <strong>Owner session active</strong>
                                <span>You are signed in to the admin panel.</span>
                            </div>
                            <span class="activity-state">ACTIVE</span>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon">◇</div>
                            <div class="activity-copy">
                                <strong>Product module</strong>
                                <span>Product management is the next workspace module.</span>
                            </div>
                            <span class="activity-state activity-state-muted">READY</span>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon">▤</div>
                            <div class="activity-copy">
                                <strong>Content module</strong>
                                <span>Website content tools can be added next.</span>
                            </div>
                            <span class="activity-state activity-state-muted">PLANNED</span>
                        </div>
                    </div>

                    <div class="activity-note">
                        <span class="note-line"></span>
                        <p>This overview is a visual dashboard foundation. Live product statistics and activity logs can be connected as the modules are built.</p>
                    </div>
                </article>
            </section>

            <section class="module-notice" id="products">
                <div class="notice-symbol">◇</div>
                <div>
                    <strong>Product management</strong>
                    <p>The navigation and overview are prepared. The product management page will be connected in the next development stage.</p>
                </div>
                <span class="notice-badge">NEXT MODULE</span>
            </section>

            <section class="module-notice" id="content">
                <div class="notice-symbol">▤</div>
                <div>
                    <strong>Website content</strong>
                    <p>Content editing tools will be added separately without allowing edits to application source code.</p>
                </div>
                <span class="notice-badge">PLANNED</span>
            </section>

            <section class="module-notice" id="settings">
                <div class="notice-symbol">⚙</div>
                <div>
                    <strong>Settings</strong>
                    <p>Admin settings will be implemented after the core management modules.</p>
                </div>
                <span class="notice-badge">PLANNED</span>
            </section>

            <footer class="admin-footer">
                <span>© {{ date('Y') }} SPTRDITZ COLLECTION</span>
                <span>DESIGNED WITH INTENTION <span class="footer-spark">✳</span></span>
            </footer>
        </div>
    </main>
</div>

</body>
</html>
