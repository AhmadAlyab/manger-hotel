@if ($status == 3)
    <div class="row">
        <div class="col-12">
                <div class="m-3 m-lg-5">

                    <div class="text-center mt-4 mb-3">
                        <h1 class="h3">Edit Emplyee</h1>
                        <br>
                    </div>
                    <ul id="steps-native" class="nav nav-pills justify-content-center"></ul>
                    @if ($curent == 1)
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label" for="email">&nbsp;&nbsp; Email</label>
                                <input class="form-control" wire:model="email" type="email" name="email"
                                        required>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror    
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="password">&nbsp;&nbsp; Password</label>
                                <input class="form-control" wire:model="password" type="password" name="password"
                                    placeholder="Please enter an password." required>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label" for="first-name">&nbsp;&nbsp; First name</label>
                                <input class="form-control" type="text" wire:model="first_name" name="first-name"
                                    placeholder="First name.." required>
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label class="form-label" for="last-name">&nbsp;&nbsp; Last name</label>
                                <input class="form-control" type="text" wire:model="last_name" name="last-name"
                                    placeholder="Last name.." required>
                                @error('last_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label for="gender" class="form-label"> Gender</label>
                                <select name="gender" id="gender" wire:model="gender"
                                    class="custom-select my-1 mr-sm-2" required>
                                    <option value="0">-----</option>
                                    @foreach ($genders as $gender)
                                        <option value="{{ $gender->id }}">
                                            {{ $gender->name }}</option>
                                    @endforeach
                                </select>
                                @error('gender')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="number-id" class="form-label"> Number ID</label>
                                <input type="number" name="number-id" wire:model="number_id"
                                    placeholder="Please Enter the number id" class="form-control" required>
                                @error('number_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-12 text-right">
                                <button class="btn btn-primary" wire:click="next">Next</button>
                            </div>
                        </div>
                    @endif
                </div>
            @if ($curent == 2)
                <div>
                    <div class="row">
                        <div class="col-6">
                            <label for="number-phone" class="form-label">Number phone</label>
                            <input type="number" name="number-phone" wire:model="number_phone" id="number-phone"
                                class="form-control">
                            @error('number_phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="nationalitie" class="form-label">Nationalitie </label>
                            <select name="nationalitie" id="nationalitie" wire:model="nationalitie"
                                class="custom-select my-1 mr-sm-2" required>
                                <option value="0">-----</option>
                                @foreach ($nationalities as $nationalitie)
                                    <option value="{{ $nationalitie->id }}">
                                        {{ $nationalitie->name }}</option>
                                @endforeach
                            </select>
                            @error('nationalitie')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <label for="addrees" class="form-label">Addrees</label>
                        <input type="text" name="addrees" id="addrees" wire:model="addrees" class="form-control" />
                        @error('addrees')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label class="form-label" for="born-in">born in</label>
                        <input class="form-control" wire:model="born_in" type="date" id="born-in" name="born-in"
                            required>
                        @error('born_in')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6 text-left">
                            <button class="btn btn-outline-primary" wire:click="previous">Previous</button>
                        </div>
                        <div class="col-6 text-right">
                            <button class="btn btn-primary" wire:click="next">Next</button>
                        </div>
                    </div>
                </div>
            @endif
            @if ($curent == 3)
                <div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="places">Worked At</label>
                            <select name="places" id="places" wire:model="worked_at"
                                class="custom-select my-1 mr-sm-2" required>
                                <option value="0">-----</option>
                                @foreach ($places as $place)
                                    <option value="{{ $place->id }}">
                                        {{ $place->name }}</option>
                                @endforeach
                            </select>
                            @error('worked_at')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="specialization">Specialization</label>
                            <select name="specialization" id="specialization" wire:model="specialization"
                                class="custom-select my-1 mr-sm-2" required>
                                <option value="0">-----</option>
                                @foreach ($specializations as $specialization)
                                    <option value="{{ $specialization->id }}">
                                        {{ $specialization->name }}</option>
                                @endforeach
                            </select>
                            @error('specialization')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6 text-left">
                            <button class="btn btn-outline-primary" wire:click="previous">Previous</button>
                        </div>
                        <div class="col-6 text-right">
                            <button class="btn btn-primary" type="button" wire:click="update">Save</button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    @endif
