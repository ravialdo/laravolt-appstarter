<html lang="en">

<head>
	<x-partials.header title="Akun Pengguna - Dashboard" />
</head>

<body>

	<x-partials.dashboard.nav />

	<x-partials.dashboard.sidenav />

	<main class="content">

		<x-partials.dashboard.topbar />

		<!-- Breadcrumb -->
		<x-breadcrumbs.breadcrumb breadcrumb="primary">
			<x-breadcrumbs.breadcrumb-item route="{{ route('dashboard.index') }}" text="Dashboard" />
			<x-breadcrumbs.breadcrumb-item route="{{ route('akun-pengguna.index') }}" text="Akun Pengguna" />
			<x-breadcrumbs.breadcrumb-item-active text="Edit" />
		</x-breadcrumbs.breadcrumb>
		<!-- End of Breadcrumb -->

		<!-- Content -->
		
		<!-- End of Content -->

		<x-partials.dashboard.footer />

	</main>

	<x-partials.scripts />

</body>

</html>