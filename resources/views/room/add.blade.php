{{-- Add room --}}

<div class="modal fade" id="createroom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    create room
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- add form  --}}
            <form action="{{ route('room.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label for="Name" class="mr-sm-2">Number of Room</label>
                            <input id="Name" type="number" name="numder_room" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="degeer" class="mr-sm-2">Degeer</label>
                            <select name="degeer_id" id="degeer" class="custom-select my-1 mr-sm-2" required>
                                <option value="0">-----</option>
                                @foreach ($degeers as $degeer)
                                    <option value="{{ $degeer->id }}">
                                        {{ $degeer->number }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Notes</label>
                        <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>

        </div>
    </div>
</div>

{{-- End add room --}}
