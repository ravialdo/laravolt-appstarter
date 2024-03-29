<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head> 
    <x-partials.header title="Index - Dashboard"/>
</head>

<body>

        <x-partials.dashboard.nav />

        <x-partials.dashboard.sidenav />
    
        <main class="content">

           <x-partials.dashboard.topbar />

		<x-breadcrumbs.breadcrumb breadcrumb="primary">
			<x-breadcrumbs.breadcrumb-item-active text="Dashboard" />
		</x-breadcrumbs.breadcrumb>
		
		<!-- konten -->
		
			<div class="display-3 py-4">Hello, World</div>
			
		<!-- akhir konten -->
		
		<x-partials.dashboard.footer />
		
        </main>

    <x-partials.scripts />
    
</body>

</html>