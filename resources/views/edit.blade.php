@extends("layouts.main")
@section('name', 'Modifica Contatto')

@section('content')
    <div class="row">
        <div class="col-6 offset-3 d-flex align-items-center justify-content-center ">
            <form method="post" action="{{ route("booking.update", $details->id) }}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="guest-name">Nome Ospite</label>
                    <input type="text" class="form-control mb-2" name="guest_full_name" id="guest-name" aria-describedby="emailHelp"
                        placeholder="Inserisci il nome" value= {{ $details->guest_full_name }}>
                    @error("guest_full_name")
                        <h4>{{ $message }}</h4>
                    @enderror
                    <label for="guest-room">Stanza</label>
                    <input type="text" class="form-control mb-2" name="room" id="guest-room" aria-describedby="emailHelp"
                    value={{ $details->room }}
                        placeholder="Inserisci numero stanza">
                        
                     @error("room")
                        <h4>{{ $message }}</h4>
                    @enderror
                    <label for="guest-room">Carta di credito</label>
                    <input type="text" class="form-control mb-2" name="guest_credit_card" id="guest-card" aria-describedby="emailHelp"
                    value={{ $details->guest_credit_card }}
                        placeholder="Inserisci numero carta di credito">
                     @error("guest_credit_card")
                        <h4>{{ $message }}</h4>
                    @enderror
                    <label for="from_date">Data arrivo</label>
                    <input type="date" class="form-control mb-2" name="from_date" id="from_date" aria-describedby="emailHelp"
                    value={{ $details->from_date}}
                        placeholder="Inserisci data arrivo">
                    <label for="to_date">Data partenza</label>
                    <input type="date" class="form-control mb-2" name="to_date" id="to_date" aria-describedby="emailHelp"
                    value={{ $details->to_date}}
                        placeholder="Inserisci data partenza">
                    <label for="more_details">Altri dati</label>
                    <textarea type="text" class="form-control mb-2" name="more_details" id="more_details" aria-describedby="emailHelp"
                        placeholder="Inserisci note">{{ $details->more_details }} </textarea>
                    
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    
                </div>
                
                
               
                
            </form>
        </div>
    </div>
@endsection
