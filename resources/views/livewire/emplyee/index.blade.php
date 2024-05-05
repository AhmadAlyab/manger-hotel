<div>
    <a href="#" wire:click="add" class="btn btn-success btn-sm" role="button" aria-pressed="true">Add
        emplyee</a><br><br>
    <div class="table-responsive">
        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
            style="text-align: center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>number phone</th>
                    <th>worked At</th>
                    <th>processes</th>

                </tr>
            </thead>
            <tbody>
                {{ $i = 0 }}
                @foreach ($emplyees as $emplyee)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $emplyee->first_name }} {{ $emplyee->last_name }}</td>
                        <td>{{ $emplyee->number_phone }}</td>
                        <td>{{ $emplyee->place->name }}</td>
                        <td>
                            <a href="#" wire:click="edit({{$emplyee->id}})" class="btn btn-info btn-sm" role="button"
                                aria-pressed="true" title="edit emplyee"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletemplyee{{$emplyee->id}}"
                                role="button" aria-pressed="true" title="delete emplyee"><i
                                    class="fa fa-trash"></i></a>                   
                        </td>
                        @include('livewire.emplyee.delete')
                    </tr>
                @endforeach
        </table>
    </div>
</div>
