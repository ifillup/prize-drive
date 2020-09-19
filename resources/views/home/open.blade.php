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
    <p id='title'>Click to open!!!</p>
<img id="open-img" class='rotate' src="https://prizedrive.s3-ap-southeast-2.amazonaws.com/uploads/box.jpg" >
</div>

<script>
    document.getElementById('open-img').addEventListener('click', (e) => {
        e.target.classList.remove('rotate');
        @if (session('product') == 'no prize') {
            document.getElementById('title').innerText = "You didn't win a prize this time"
        } else {
            e.target.src = "{{env('AWS_URL').'/'. session('product')->image }}"
        document.getElementById('title').innerText = "You won a {{session('product')->name}}!!!!"
        }

    })
</script>
