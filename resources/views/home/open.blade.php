

<h4 id='title'>Click to open!!!</h4>
<div class="feature">

<img id="open-img" class='rotate' src="https://prizedrive.s3-ap-southeast-2.amazonaws.com/uploads/box.jpg" >
<img id="knife" class='knife' src="https://prizedrive.s3-ap-southeast-2.amazonaws.com/assets/knife.png" >
</div>

<script>

    document.getElementById('open-img').addEventListener('click', (e) => {

        e.target.classList.remove('rotate');
        document.getElementById('title').innerText = ""

        document.getElementById('knife').classList.add('open');
        setTimeout(()=> {

        @if ($product == 'no prize')
          let sound = new Audio('https://prizedrive.s3-ap-southeast-2.amazonaws.com/assets/dodo.mp3');
          sound.volume = 0.5;
          sound.play();
          document.getElementById('title').innerText = "You didn't win a prize this time"
        @else
           e.target.src = "{{env('AWS_URL').'/'. $product->image }}"
           let sound = new Audio('https://prizedrive.s3-ap-southeast-2.amazonaws.com/assets/tada.mp3');
            sound.volume = 0.5;
            sound.play();
          document.getElementById('title').innerText = "You won a {{$product->name}}!!!!"

        @endif
        document.getElementById('knife').classList.remove('open');
        }, 3000)



    })
</script>
