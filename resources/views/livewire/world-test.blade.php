<div>
    this is the world-test.blade.php which is just included on the welcome.blade.php page
    <button wire:click="updateWorld">Click to Fire Update World</button>
  <div
    x-data="{ hello: @entangle('world') }"
    x-init="
        $store.hello = @entangle('world');
        console.log('set from x-data: hello = '+ hello);
        console.log('set from $store.hello = '+ $store.hello);
        console.log($store.hello);
        $watch('hello', value => { console.log('set from x-data: hello = '+ value) })
        $watch('$store.hello', value => { console.log('set from x-data: hello = '+ value) })
        "
  ></div>
  <hr>
   
   Open your browser's console and you will see x-data log and the first $store log
<p>
  I am pulling alpine with CDN in this example so store is setup at the bottom of welcome.blade.php

</div>