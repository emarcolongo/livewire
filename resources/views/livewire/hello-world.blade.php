<div>
    Hello World Livewire!!! <br>
    <hr>
    My public Name is {{ $publicName }} <br>
    My name is {{ $name }} <br>
    <hr>
    <select wire:model="greeting">
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>
    <input wire:model="dataName" type="text" name="" id="">
    <input wire:model="loud" type="checkbox" name="" id="">
    {{ $greeting }}, My dataName is {{ strtoupper($dataName) }} @if ($loud) ! @endif <br>
    <hr>
    <input wire:model.lazy="dataNameLazy" type="text" name="" id="">
    My dataName is {{ strtoupper($dataNameLazy) }} with lazy <br>
    <hr>
    <select wire:model="greetingMultiple" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>
    {{ implode(', ', $greetingMultiple) }}
    <br><hr>
    <button wire:click="resetPublicName">Reset PublicName</button>
    <hr>
    <button wire:click="resetDataName('Paulo')">Reset DataName w/Parameters</button>
    <hr>
    <button wire:mouseenter="resetDataName('Paulo')">Reset DataName w/Parameters and MouseEnter</button>
    <hr>
    <form action="#" wire:submit.prevent="resetDataName('Paulo')">
        <button>Reset DataName w/Form</button>
    </form>
    <hr>
    <form action="#" wire:submit.prevent="$set('dataName', 'Paulo')">
        <button>Reset DataName w/Form and ShorCut</button>
    </form>
</div>
