<div>
<div class="card mt-3">
        <div class="card-header">
            Produtos
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <input wire:model="term" type="text" id="term" name="term" class="form-control" placeholder="Procurar...">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <input type="button" wire:click="getApi" class="btn btn-success" value="Pesquisar">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <input type="button" wire:click="resetTerm" class="btn btn-danger" value="Limpar">
                </div>
            </div>    
            
            @if(count($dataDetail) > 0)
                <div class="row mb-2">
                    <div class="col-6">
                        <span><b>Produto:</b> {{ $dataDetail[0]["name"] }}</span><br>
                        <span><b>Marca:</b> {{ $dataDetail[0]["brand"] }}</span><br>
                        <span><b>Descricao:</b> {!! $dataDetail[0]["gearSeoHtml"] !!}</span><br>
                    </div>
                    <div class="col-6">
                        <img src="{{ $dataDetail[0]["thumbnail"] }}" width="250" height="250">
                    </div>
                </div>
            @else
                <span>{{ $message }}</span>
            @endif
        </div>    
</div>