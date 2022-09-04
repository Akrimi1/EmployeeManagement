<div>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Countries</h1>
    </div>
    <div class="row">
        <div class="card  mx-auto">
            <div>
                @if (session()->has('country-message'))
                    <div class="alert alert-success">
                        {{ session('country-message') }}
                    </div>
                @endif
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input type="search" wire:model="search" class="form-control mb-2"
                                        id="inlineFormInput" placeholder="Copuntry name">
                                </div>
                                <div class="col" wire:loading>
                                    <div class="spinner-border" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div>
                        <button wire:click="showCountryModal" class="btn btn-primary">
                            New Country
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table" wire:loading.remove>
                    <thead>
                        <tr>
                            <th scope="col">#Id</th>
                            <th scope="col">Country Code</th>
                            <th scope="col">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($countries as $country)
                            <tr>
                                <th scope="row">{{ $country->id }}</th>
                                <td>{{ $country->country_code }}</td>
                                <td>{{ $country->name }}</td>
                                <td>
                                    <button
                                        class="btn btn-success" wire:click="showEditModal({{ $country->id }})">Edit</button>
                                    <button 
                                        class="btn btn-danger" wire:click="deleteCountry({{ $country->id }})">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th>No Results</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div>
                
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="countryModal" tabindex="-1" aria-labelledby="countryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="countryModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"> 
                        <form>
                            <div class="form-group row">
                                <label for="CountryCode"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Country Code') }}</label>

                                <div class="col-md-6">
                                    <input id="CountryCode" type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        wire:model.defer="CountryCode"
                                        >

                                    @error('country_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="firstName"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror"
                                        wire:model.defer="name"
                                        >

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>                                                       
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal">Close</button>
                        @if($editMode)
                            <button type="button" class="btn btn-primary" wire:click="updateCountry">Update Country</button>
                        @else
                            <button type="button" class="btn btn-primary" wire:click="storeCountry">Store Country</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>