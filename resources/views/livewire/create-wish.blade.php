<div>
    <label for="sampleInput">Nama</label>
    <input wire:model="name" class="u-fullwidth" type="text" value="" placeholder="Nama anda" name="name" required>


    <label for="exampleMessage">Ucapan & doa restu</label>
    <textarea wire:model="comment" class="u-fullwidth" placeholder="Ucapan anda" name="comment" required></textarea>
    <button wire:click="createWish" class="btn--primary u-fullwidth">Kirim Ucapan</button>
</div>
