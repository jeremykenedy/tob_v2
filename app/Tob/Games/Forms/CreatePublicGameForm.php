<?php namespace Tob\Games\Forms;


use Laracasts\Validation\FormValidator;

class CreatePublicGameForm extends FormValidator {

	protected $rules = [
		"name" => 'required',
		"players" => "required|numeric",
	];

}