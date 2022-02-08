<!-- Modal -->
  <div class="modal fade " id="info{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Doctor Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <p>

                 <img src="{{asset ('images')}}/{{$user->image}}">
</P>
                
                <p class="badge badge-pill badge-dark">Role:{{$user->role->name}}</p>
           

               <p> NAME: {{$user->name}}</p> 
               <p> {{$user->education}}    </p>
                <p>   {{$user->department}}    </p>
                 <p>  {{$user->  description }}   </p>

           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
         
        </div>
      </div>
    </div>
  </div>




{{-- <!-- JS code -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
</script>
<!--JS below--> --}}



{{-- <script>
  $(document).ready(function() {
     $("#MyModal").modal();
     $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').focus();
     });
  });
</script>
 --}}

