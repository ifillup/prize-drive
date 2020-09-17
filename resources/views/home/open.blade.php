<style>
    #open-img {
        width: 400px;
        height: 400px;
    }
    .rotate {
  animation: rotate 1.5s linear infinite;
}
@keyframes rotate{
  to{ transform: rotateY(360deg); }
}
</style>


<div class="">
    <p>Click to open!!!</p>
<img id="open-img" class='rotate' src="https://prizedrive.s3-ap-southeast-2.amazonaws.com/uploads/box.jpg" >
</div>

<script>
    document.getElementById('open-img').addEventListener('click', (e) => {
        e.target.classList.remove('rotate');
        e.target.src = "{{env('AWS_URL').'/'. session('product')->image }}"
        e.target.innerText = "You won a {{session('product')->name}}!!!!"
    })
</script>
