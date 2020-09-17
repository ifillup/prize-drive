<style>
    #open-img {
        transition: transform 10s;

    }
    #open-img:hover {
        transform: rotateY(1180deg);
}
    #open-img:active {

}
</style>
<script>
    document.getElementById('open-img').addEventListener('click', (e) => {
        e.target.src = {{env('AWS_URL').'/'. session('product')->image }};
    })
</script>


<img id="open-img" src="https://prizedrive.s3-ap-southeast-2.amazonaws.com/uploads/box.jpg" >


<script>
    document.getElementById('open-img').addEventListener('click', (e) => {
        e.target.src = {{env('AWS_URL').'/'. session('product')->image }};
    })
</script>
