@extends('app')

@section('azhar')
<table class="table">
    <tr>
        <td><h1 class="text-center">Todo Edit</h1></td>
    </tr>
    <tr>
        <form action="{{route('todoUpdate')}}">
        <td >
            <div class="input-group mb-3">
                <input type="hidden" name="cid" value="{{$selected->id}}">
                <input type="text" name="title" class="form-control" placeholder="To do Title" value="{{$selected->title}}" aria-label="Recipient's username" aria-describedby="button-addon2">
                <select name="status" class="form-select" aria-label="Default select example">
                    <option {{$selected->status == 1? 'selected':'';}} value="1">Completed</option>
                    <option {{$selected->status == 0? 'selected':'';}} value="0">incompleted</option>
                  </select>
                <button class="btn btn-success" type="submit" id="button-addon2">Update</button>
              </div>
        </td>
    </form>
    </tr>
</table>

@endsection
        