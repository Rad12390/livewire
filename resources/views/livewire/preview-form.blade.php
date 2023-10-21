  <section class="signin-bg">
      <div class="d-flex align-items-center justify-content-between h-100 flex-wrap">

      <table>
         <tbody>
             <tr>
                 <td>Email</td>
                 <td> {{ request()->email }} </td>
             </tr>
          <tr>
                 <td>Phone</td>
                 <td>{{ request()->tel }}</td>
             </tr>
          <tr>
                 <td>Description</td>
                 <td>{{ request()->editor }}</td>
             </tr>
          <tr>
                 <td>Profile Pic</td>
                 <td>{{ request()->profile_name }}</td>
             </tr>
        </tbody>
     </table>  
    
<form>
       <button type="button" class="btn btn-purple-fill" wire:click="formPreviewSubmit({{request()->values}})"> Submit </button>
 
</form>
 </div>
</section>