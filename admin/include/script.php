<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script> -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    </script>
    
    <script>
     $('#select_category').change(function(){
        var val = $(this).val();
        if(val == 0){
            window.location = 'product.php';
        }
        else{
            window.location = 'product.php?category='+val;
        }
    });

    $('.view-button').click(function() {
        var description = $(this).data('description');
        var title = $(this).data('title');
        $('#descriptionContent').text(description);
        $('#titleContent').text(title);
        // console.log(title);
    });
    $('.photo').click(function() {
        var id = $(this).data('id');
        var title = $(this).data('title');
        // console.log(id,title);
        $('.prodid').val(id);
        $('.pro_title').text(title);
    });
    $('.delete-product').click(function() {
        // document.querySelector('.form-edit').style.display = 'flex';
        var id = $(this).data('id');
        // var description = $(this).data('description');
        var title1 = $(this).data('title');
        $('#delete-title').text(title1);
        $('.prodid').val(id);
        
        // console.log(title1);
        // var img = $(this).data('img');
        // var sp = $(this).data('sp');
        // var con = $(this).data('condition');
        // var rp = $(this).data('rp');
        // var rd = $(this).data('rd');
        // var ar = $(this).data('ar');
        // var cid = $(this).data('CatID');
        
        // // document.querySelector('#edit-t').innerHTML=title;
        // $('#edit-desc').val(description);
        // // $('#edit-img').val(img);
        // $('#edit-sp').val(sp);
        // $('#edit-c').val(con);
        // $('#edit-rp').val(rp);
        // $('#edit-rd').val(rd);
        // $('#edit-AFR').val(ar);
        // // $('#edit-CID').val(cid);
        // console.log(title,img,description,sp,con,rp,rd,ar,cid);
    });

    
// function showDescription(title, description) {
//   document.getElementById("titleContent").innerHTML = title;
//   document.getElementById("descriptionContent").innerHTML = description;
// }



   

</script>    
<script>

$('#add_new_product').click(function() {
    document.querySelector("#forms").style.display = 'flex';
    });
$('#hide').click(function() {
    document.querySelector("#forms").style.display = 'none';
    });
// document.querySelector("#add_new_product").addEventListener('click',()=>{
//     document.querySelector("#forms").style.display = 'flex';
// });
// document.querySelector("#hide").addEventListener('click',()=>{
//     document.querySelector("#forms").style.display = 'none';
// });
// edits = document.getElementsByClassName('edit-pro');
// Array.from(edits).forEach((element)=>{
//     element.addEventListener("click",(e)=>{
//         document.querySelector('.form-edit').style.display = 'flex';
//         tr = e.target.parentNode.parentNode;
//         title=tr.getElementsByTagName('td')[1].innerText;
//         img=tr.getElementsByTagName('td')[2].innerText;
//         desc=tr.getElementsByTagName('td')[3].innerText;
//         sp=tr.getElementsByTagName('td')[4].innerText;
//         con=tr.getElementsByTagName('td')[5].innerText;
//         rp=tr.getElementsByTagName('td')[6].innerText;
//         rd=tr.getElementsByTagName('td')[7].innerText;
//         ar=tr.getElementsByTagName('td')[8].innerText;
//         console.log(tr);
//         console.log(title,img,desc,sp,con,rp,rd,ar);
//         // document.getElementById('edit-t').innerHTML=title;
//     });
// });

</script>

<!-- user page script -->
<script>
    $('.user-edit').click(function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var email = $(this).data('email');
        var phone = $(this).data('phone');
        var password = $(this).data('password');
        console.log(id,name,email,phone,password);
        $('#edit-user-id').val(id);
        $('#edit-user-name').val(name);
        $('#edit-user-email').val(email);
        $('#edit-user-phone').val(phone);
        $('#edit-user-password').val(password);
    });


    $('.delete-user').click(function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        $('.userid').val(id);
        $('#delete-user-name').text(name);
      
    });



</script>