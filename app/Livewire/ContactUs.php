<?php

namespace App\Livewire;

use App\Events\Inquiry\Created;
use App\Models\Inquiry;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Livewire\Component;
use Spatie\Honeypot\Http\Livewire\Concerns\HoneypotData;
use Spatie\Honeypot\Http\Livewire\Concerns\UsesSpamProtection;

class ContactUs extends Component implements HasForms
{
    use InteractsWithForms;
    use UsesSpamProtection;

    public ?array $data = [];

    public $submitted = false;

    public HoneypotData $extraFields;

    public function mount(): void
    {
        $this->form->fill();
        $this->extraFields = new HoneypotData();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('first_name')->required(),
                TextInput::make('last_name')->required(),
                TextInput::make('email')->required()->columnSpan(2),
                TextInput::make('phone')->required()->columnSpan(2),
                Textarea::make('message')->required()->columnSpan(2)->rows(4)->autosize(),
            ])
            ->columns(2)
            ->statePath('data');
    }

    public function create(): void
    {
        $this->protectAgainstSpam();
        $inquiry = new Inquiry($this->form->getState());
        $inquiry->save();
        event(new Created($inquiry));
        Notification::make()
            ->title('Thank you for your inquiry!')
            ->body('We will get back to you as soon as we can.')
            ->success()
            ->send();
        $this->form->fill();
        $this->submitted = true;
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
