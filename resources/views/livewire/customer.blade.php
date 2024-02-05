<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1>Customers</h1>
                        <div class="float-left">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Customer</li>
                        </ol> 
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right mb-3">
                            <button class="btn btn-primary" wire:click.prevent="calljs" data-toggle="modal"
                                data-target="#modal-lg"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row p-2">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="text" wire:model.live="customerName" class="form-control"
                                                placeholder="Enter Customer Name">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="email" class="form-control" wire:model.live="customerEmail"
                                                placeholder="Enter Customer Email">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="email" class="form-control" wire:model.live="customerPhoneNo" id="customer_phone_no"
                                                placeholder="Enter Customer PhoneNumber">
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Customer Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($customers as $key => $customer)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    <div class="user-panel d-flex">
                                                        <div class="image">
                                                            <img src="{{ asset('uploads/' . $customer->image) }}"
                                                                class="img-circle elevation-2" alt="User Image">
                                                        </div>
                                                        <div class="info">
                                                            <span class="d-block">{{ $customer->name }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{$customer->customer_name}}</td>
                                                <td>{{ $customer->email }}</td>
                                                <td>{{ $customer->phone_no }}</td>
                                                <td>
                                                    <button class="btn btn-primary"
                                                        wire:click="editCustomer({{ $customer->id }})"><i
                                                            class="far fa-edit"></i></button>
                                                    <button class="btn btn-danger delete"
                                                        data-value="{{ $customer->id }}"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Customers</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="pagination float-right">
                            <li class="page-item">{{ $customers->links() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div wire:ignore.self class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit="addCustomer" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="CustomerName">Customer Name</label>
                                    <input type="text"
                                        class="form-control @error('customer_name') is-invalid @enderror"
                                        wire:model="customer_name" id="customer_name" placeholder="Enter Customer Name">
                                    @error('customer_name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="CompanyName">Name(Company Name)</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        wire:model="name" id="name" placeholder="Enter Customer Name">
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        wire:model="email" id="exampleInputEmail1" placeholder="Enter email">
                                    @error('email')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Logo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('image') is-invalid @enderror"
                                                wire:model="image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                Logo</label>
                                        </div>
                                    </div>
                                    @error('image')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ComapanyURL">Company URL</label>
                                    <input type="text"
                                        class="form-control @error('company_url') is-invalid @enderror"
                                        wire:model="company_url" wire:model="company_url" id="company_url"
                                        placeholder="Enter Company URL">
                                    @error('company_url')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="GSTNo">GST No</label>
                                    <input type="text" class="form-control @error('gst_no') is-invalid @enderror"
                                        name="gst_no" wire:model="gst_no" id="gst_no"
                                        placeholder="Enter GST No">
                                    @error('gst_no')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="PhoneNumber">Phone Number</label>
                                    <input type="text" class="form-control @error('phone_no') is-invalid @enderror"
                                        id="phone_number" wire:model="phone_no" placeholder="Enter Phone Number">
                                    @error('phone_no')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Countrysssss</label>
                                    <select
                                        class="form-control country_dropdown select2 @error('country_id') is-invalid @enderror"
                                        wire:model="country_id">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <select
                                        class="form-control state_dropdown select2 @error('state_id') is-invalid @enderror"
                                        wire:model="state_id">
                                        <option selected="" disabled>Select State</option>
                                        @if ($states != null)
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('state_id')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="city" class="form-control @error('city') is-invalid @enderror"
                                        wire:model="city" id="City" placeholder="Enter city">
                                    @error('city')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" rows="3" wire:model="address"
                                        placeholder="Enter Address"></textarea>
                                    @error('address')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer float-right">
                        <button type="button" wire:click="addCustomer" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="edit_modal_form" class="edit_model">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $title }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit="updateCustomer" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" wire:model="id" />
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Customer">Customer Name</label>
                                    <input type="text"
                                        class="form-control @error('customer_name') is-invalid @enderror"
                                        wire:model="customer_name" id="customer_name"
                                        placeholder="Enter Customer Name">
                                    @error('customer_name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="CompanyName">Name(Company Name)</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        wire:model="name" id="name" placeholder="Enter Customer Name">
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        wire:model="email" id="Email" placeholder="Enter email">
                                    @error('email')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Logo
                                        @if ($url != null)
                                            <a href="{{ $url }}" target="_blank">View</a>
                                        @endif
                                    </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('image') is-invalid @enderror"
                                                wire:model="image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                Logo</label>
                                        </div>
                                    </div>
                                    @error('image')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="CompanyURL">Company URL</label>
                                    <input type="text"
                                        class="form-control @error('company_url') is-invalid @enderror"
                                        wire:model="company_url" wire:model="company_url" id="company_url"
                                        placeholder="Enter Company URL">
                                    @error('company_url')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="GSTNo">GST No</label>
                                    <input type="text" class="form-control @error('gst_no') is-invalid @enderror"
                                        name="gst_no" wire:model="gst_no" id="gst_no"
                                        placeholder="Enter GST No">
                                    @error('gst_no')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="PhoneNumber">Phone Number</label>
                                    <input type="text"
                                        class="form-control @error('phone_no') is-invalid @enderror"
                                        id="phone_number" wire:model="phone_no" placeholder="Enter Phone Number">
                                    @error('phone_no')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select
                                        class="form-control country_dropdown select2 @error('country_id') is-invalid @enderror"
                                        wire:model="country_id">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <select
                                        class="form-control state_dropdown select2 @error('state_id') is-invalid @enderror"
                                        wire:model="state_id">
                                        <option selected="" disabled>Select State</option>
                                        @if ($states != null)
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}"
                                                    {{ $state_id == $state->id ? 'selected' : '' }}>{{ $state->name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('state_id')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="city" class="form-control @error('city') is-invalid @enderror"
                                        wire:model="city" id="City" placeholder="Enter city">
                                    @error('city')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" rows="3" wire:model="address"
                                        placeholder="Enter Address"></textarea>
                                    @error('address')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer float-right">
                        <button type="button" wire:click="updateCustomer" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        Livewire.on('calljs', function(data) {
            setTimeout(() => {
                $(".select2").select2();
            }, 1000);
        });

        Livewire.on('dismissmodal', function(data) {
            (data.parameter == 400) ? toastr.error(data.message): toastr.success(data.message);
            setTimeout(() => {
                location.reload();
            }, 1500);
        });

        Livewire.on('delete', function(data) {
            if (data.parameter == "200") {
                Swal.fire({
                    title: "Deleted!",
                    text: "Customer has been deleted.",
                    icon: "success"
                });
            } else {
                toastr.error(data.message);
            }
        });
        Livewire.on('message', function(data) {
            if (data.parameter == 200) {
                $("#edit_modal_form").modal('show');
            } else {
                toastr.error(data.message);
            }
        });

        $(".country_dropdown").on('click change', function(e) {
            @this.callState(e.target.value);
        })

        $(".state_dropdown").on('click change', function(e) {
            @this.setState(e.target.value);
        })

        $(".delete").on('click', function(e) {
            var value = $(this).data('value');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.deleteCustomer(value);
                }
            });
        })
    </script>
@endpush
