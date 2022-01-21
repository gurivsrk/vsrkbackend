@foreach($item as $item)
<div  class="col-lg-6 col-xl-4 col-md-6">
    <div class="card">
    <div class="card-header {{($type == 'edit-team' || $type == 'index-team')?'card-header-warning':($item->post_status == 'enabled'?'card-header-success':'card-header-danger')}}">
        <div class="float-right">
        @if($type == 'edit-blog' || $type == 'index-blog')
            <a href="#" class="vsrk-icon"><span class="material-icons">preview</span></a>
        @endif
            <a href="{{($type == 'edit-team' || $type == 'index-team')?route('team.edit',$item->id):route('all-blogs.edit',$item->id)}}" class="vsrk-icon"><span class="material-icons">edit</span></a>
            <form action="{{ ($type == 'edit-team' || $type == 'index-team')?route('team.destroy',$item->id):route('all-blogs.destroy',$item->id) }}" method="POST" onsubmit="return confirm('Are you sure ?');" style="display: inline-block;">
                @method('delete') 
                @csrf
                <button class="vsrk-icon vsrk-icon-delete btn-link"> <i class="material-icons">delete_outline</i> </button>
            </form>
        </div>
        <h4 class="card-title">{{($type == 'edit-team' || $type == 'index-team')?$item->name:$item->title}}</h4>
        @if($item->designation)
        <p class="card-category">{{$item->designation}}</p>
        @else
            <p class="card-category">Posted On: {{date('d-M-Y h:i:sa', strtotime($item->created_at))}}</p>
        @endif
    </div>
    <div class="card-body table-responsive img-padding text-center">
        <img class="img-fluid obj-fit-img" src="{{($type == 'edit-team' || $type == 'index-team')?asset($item->profileImg):asset($item->blogImage)}}">
        <p class="pt-2 text-justify">{!! Str::limit($item->descritption,200) !!}</p> 
    </div>
    </div>
</div>
@endforeach