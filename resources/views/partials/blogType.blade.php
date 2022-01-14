<div class="col-lg-6 col-xl-4 col-md-6">
    <div class="card">
    <div class="card-header card-header-warning">
        <div class="float-right">
        <a href="#" class="vsrk-icon"><span class="material-icons">edit</span></a>
        <a href="#" class="vsrk-icon vsrk-icon-delete"> <span class="material-icons">delete_outline</span></a>
        </div>
        <h4 class="card-title">Name</h4>
        <p class="card-category">Added On: {{date('d-m-y, h:i:sa')}}</p>
    </div>
    <div class="card-body table-responsive">
        <img class="img-fluid" src="https://dummyimage.com/600x400/000/fff">
        <p class="pt-2 text-justify">{{ Str::limit("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",200) }}</p> 
    </div>
    </div>
</div>