


<div class="boxview">

<img id="open-img" class='deliver' src="https://prizedrive.s3-ap-southeast-2.amazonaws.com/uploads/box.jpg" >
<img id="knife" class='knife' src="https://prizedrive.s3-ap-southeast-2.amazonaws.com/assets/knife.png" >
<div id='display-open' class="open-btn">Click to open</div>
@if (!($product == 'no prize'))
    <form  action="{{ secure_url('/sell') }}" method="POST">
        @csrf
            <input type="hidden" name="value" value="{{$product->cost}}" >
            <input type="hidden" name="item" value="{{$item->id}}" >
            <button id='sell-btn' class="btn btn-primary btn-sm" style="display: none;" type="submit" >Sell for ${{$product->cost}}</button>
    </form>
@endif
</div>

<script>

    function openBox(e) {

        e.target.classList.remove('rotate');
        document.getElementById('display-open').innerText = ""

        document.getElementById('knife').classList.add('open');
        const openSound = new Audio('https://prizedrive.s3-ap-southeast-2.amazonaws.com/assets/knife-slash.wav');
        const openSound2 = new Audio('https://prizedrive.s3-ap-southeast-2.amazonaws.com/assets/knife-slash2.wav');
        openSound2.play();
        const playingSound = setInterval(() => {
            openSound.play();
        }, 500);
        const playingSound2 = setTimeout(() => {
            openSound.play();
        }, 1000);

        setTimeout(()=> {
            clearInterval(playingSound);
            clearInterval(playingSound2);
                @if ($product == 'no prize')

                let sound = new Audio('https://prizedrive.s3-ap-southeast-2.amazonaws.com/assets/dodo.mp3');
                sound.volume = 0.5;
                sound.play();
                document.getElementById('display-open').innerText = "You didn't win a prize this time"

                @else
                // const sellBtn = document.createElement('BUTTON');
                // sellBtn.innerText = 'Sell for {{$product->cost}}'
                // sellBtn.id = 'open-btn'

                // sellBtn.classList.add('btn')
                // sellBtn.classList.add('btn-outline-primary')
                e.target.src = "{{env('AWS_URL').'/'. $product->image }}"
                let sound = new Audio('https://prizedrive.s3-ap-southeast-2.amazonaws.com/assets/tada.mp3');
                    sound.volume = 0.5;
                    sound.play();
                document.getElementById('display-open').innerText = "You won a {{$product->name}}!!!!"
                document.querySelector('#sell-btn').style.display = 'block'
                @endif
            document.getElementById('knife').classList.remove('open');
        }, 3000)
        document.getElementById('open-img').removeEventListener('click', openBox)
        }
    document.getElementById('open-img').addEventListener('click', openBox)


</script>
