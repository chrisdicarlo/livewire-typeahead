<?php

namespace ChrisDiCarlo\LivewireTypeahead\Http\Livewire;

use Exception;
use Livewire\Component;

abstract class Typeahead extends Component
{
    public $results;

    public $search;

    public $selected;

    public $showDropdown;

    public $placeholder = 'Search ...';

    protected $listeners = ['valueSelected'];

    abstract public function query();

    public function mount($selected = null)
    {
        $this->showDropdown = false;
        $this->results = collect();

        if ($selected) {
            $this->selected = $selected;
            $this->search = $selected->{$this->typeaheadText};
        }
    }

    public function valueSelected($value)
    {
        if (! isset($this->parentListener)) {
            throw new Exception('No parent listener defined to accept updated value(s)');
        }
        $this->emitUp($this->parentListener, $value);
    }

    public function updatedSelected()
    {
        $this->emitSelf('valueSelected', $this->selected);
    }

    public function updatedSearch()
    {
        if (strlen($this->search) < 2) {
            $this->results = collect();
            $this->showDropdown = false;

            return;
        }

        if ($this->query()) {
            $this->results = $this->query()->get();
        } else {
            $this->results = collect();
        }

        $this->selected = '';
        $this->showDropdown = true;
    }

    public function render()
    {
        return view('livewire-typeahead::livewire.typeahead');
    }
}
