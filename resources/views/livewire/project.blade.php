<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1>Projects</h1>
                        <div class="float-left">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Project</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right mb-3">
                            <button class="btn btn-primary" wire:click.prevent="calljs" data-toggle="modal" data-target="#modal-lg"><i
                                    class="fas fa-plus"></i></button>
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
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Project</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Estimation</th>
                                            <th>Project Manager</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($projects as $key => $project)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    <div class="user-panel d-flex">
                                                        <div class="image">
                                                            <img src="{{ asset('uploads/' . $project->customer->image) }}"
                                                                class="img-circle elevation-2" alt="User Image">
                                                        </div>
                                                        <div class="info">
                                                            <span>{{$project->name}}</span>
                                                            <span class="d-block">{{ $project->customer->name }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{Carbon\Carbon::parse($project->start_date)->format('d M Y')}}</td>
                                                <td>{{Carbon\Carbon::parse($project->end_date)->format('d M Y')}}</td>
                                                <td>{{ $project->estimation_cost }}</td>
                                                <td>{{ $project->project_manager }}</td>
                                                <td>
                                                    <button class="btn btn-primary"
                                                        wire:click="editCustomer({{ $project->id }})"><i
                                                            class="far fa-edit"></i></button>
                                                    <button class="btn btn-danger delete"
                                                        data-value="{{ $project->id }}"><i
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
                            {{-- <li class="page-item">{{ $customers->links() }}</li> --}}
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
                <form wire:submit="addProject" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Customer">Customer</label>
                                    <select class="form-control customer_dropdown select2 @error('customer_id') is-invalid @enderror" wire:model="customer_id">
                                        <option value="">Select Customer</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('customer_id')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ProjectName">Project Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        wire:model="name" id="name" placeholder="Enter Project Name">
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ProjectManagerName">Project Manager</label>
                                    <input type="text"
                                        class="form-control @error('project_manager') is-invalid @enderror"
                                        wire:model="project_manager" id="project_manager"
                                        placeholder="Enter Project Manager">
                                    @error('project_manager')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="EstimationCost">Estimation Cost</label>
                                    <input type="text"
                                        class="form-control @error('estimation_cost') is-invalid @enderror"
                                        wire:model="estimation_cost" wire:model="estimation_cost" id="estimation_cost"
                                        placeholder="Enter Estimation Cost">
                                    @error('estimation_cost')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="StartDate">Start Date</label>
                                    <input type="text"
                                        class="form-control datepicker @error('start_date') is-invalid @enderror"
                                        id="start_date" wire:model="start_date" placeholder="Enter Start Date">
                                    @error('start_date')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="EndDate">End Date</label>
                                    <input type="text"
                                        class="form-control datepicker @error('end_date') is-invalid @enderror"
                                        id="end_date" wire:model="end_date" placeholder="Enter End Date">
                                    @error('end_date')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer float-right">
                        <button type="button" wire:click="addProject" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        $(".select2").select2();
        Livewire.on('dismissmodal', function(data) {
            (data.parameter == 400) ? toastr.error(data.message): toastr.success(data.message);
            setTimeout(() => {
                location.reload();
            }, 1500);
        });

        Livewire.on('calljs', function(data) {
            setTimeout(() => {
                $(".select2").select2();
            }, 1000);
        });

        $(".customer_dropdown").on('click change', function(e) {
            @this.setCustomer(e.target.value);
        })

        $("body").on('change',"#start_date",function(e){
            @this.setStartDate(e.target.value);
        })

        $("body").on('change',"#end_date",function(e){
            @this.setEndDate(e.target.value);
        })

    </script>
@endpush
