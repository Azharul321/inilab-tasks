@extends('app')

@section('azhar')
<table class="table">
    <tr>
        <td colspan="4"><h1 class="text-center">Todo List</h1></td>
    </tr>
    <tr>
        <form action="{{route('createTodo')}}">
        <td colspan="4">
            <div class="input-group mb-3">
                <input name="title" type="text" class="form-control" placeholder="To do Title" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-success" type="submit" id="button-addon2">Add</button>
              </div>
        </td>
    </form>
    </tr>
    @if ($list->count() != NULL)
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Status</th>
        <th>Action</th>
    </tr>  
    @endif
    
    @foreach ($list as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td><span class="badge rounded-pill {{$item->status == 1?'text-bg-primary':'text-bg-warning';}} ">{{$item->status == 1?'Completed':'incompleted';}}</span></td>
        <td>
            <a onclick="return confirm('Are you sure you want to Edit this Task?');" href="{{route('TodoEditPage',$item->id)}}"><button class="btn btn-dark">Edit</button></a>
            <a onclick="return confirm('Are you sure you want to delete this Task?');" href="{{route('deleteTodo',$item->id)}}"><button class="btn btn-danger">Delete</button></a>
        </td>
    </tr> 
    @endforeach
</table>

@endsection
        