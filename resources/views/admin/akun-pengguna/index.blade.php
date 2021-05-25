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
    <x-partials.header title="Akun Pengguna - Dashboard"/>
</head>

<body>

        <x-partials.dashboard.nav />

        <x-partials.dashboard.sidenav />
    
        <main class="content">

           <x-partials.dashboard.topbar />
		
		<!-- Breadcrumb -->
		 <x-breadcrumbs.breadcrumb breadcrumb="primary">
			<x-breadcrumbs.breadcrumb-item route="{{ route('dashboard.index') }}" text="Dashboard" />
			<x-breadcrumbs.breadcrumb-item-active text="Akun Pengguna" />
		</x-breadcrumbs.breadcrumb>
		<!-- End of Breadcrumb -->
		
		<!-- Content -->
		
		<!-- Card -->
		 <x-cards.card-between title="Data Akun">
			<x-slot name="between">
				<!-- Modal -->
				<x-modals.button-modal target="#create" class="btn-sm">
					<i class="fas fa-plus"></i> Tambah Data
				</x-modals.button-modal>
				<x-modals.modal target="create" title="Tambah Data Akun">
					<form method="post" action="{{ route('akun-pengguna.store') }}">
					
						@csrf
						
					<x-slot name="footer">
						
						</form>
					</x-slot>
				</x-modals.modal>
				<!-- End Of Modal -->
			</x-slot>
			Anda dapat mengelola akun pengguna disini.
			<!-- Table -->
			<x-tables.table>
				<x-slot name="thead">
					<tr>
						<th>No</th>
						<th>Nama Lengkap</th>
						<th>Username</th>
						<th>Email</th>
						<th>Role</th>
						<th>Dibuat</th>
						<th>Aksi</th>
					</tr>
				</x-slot>
				<x-slot name="tbody">
					@php $i=1 @endphp
					@foreach($user as $data)
							<tr>
								<th>{{ $i++ }}</th>
								<td>{{ $data->full_name }}</td>
								<td>{{ $data->username }}</td>
								<td>
									<a href="mailto:{{ $data->email }}" class="text-info">{{ $data->email }}</a>
								</td>
								<td>{{ $data->role }}</td>
								<td>{{ $data->created_date }}</td>
								<td>
								 	 <div class="btn-group">
                                    			<button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        			<span class="icon icon-sm">
                                         			   <span class="fas fa-ellipsis-h icon-dark"></span>
                                        			</span>
                                     			   	<span class="sr-only">Toggle Dropdown</span>
                                    			</button>
                                    			<div class="dropdown-menu py-0">
                                        			<a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>Lihat Detail</a>
                                        			<a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Ubah</a>
                                        			<a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Hapus</a>
                                    			</div>
                                			</div>
								</td>
							</tr>
						@endforeach
				</x-slot>
			</x-tables.table>
			<!-- End of Table -->
		</x-cards.card-between>
		<!-- End of Card -->
		
		<!-- End of Content -->
		
		<x-partials.dashboard.footer />
		
        </main>

    <x-partials.scripts />
    
</body>

</html>