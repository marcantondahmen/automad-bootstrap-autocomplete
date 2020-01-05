# Automad Bootstrap Autocomplete Extension

This Automad package is a wrapper for the [bootstrap-4-autocomplete](https://github.com/Honatas/bootstrap-4-autocomplete) npm package and makes it easy to create Bootstrap 4 autocomplete dropdowns for search fields in [Automad](https://automad.org) templates.

## Usage 

To get a basic dropdown with the default settings, simply use the package as follows:

	<@ Automad/Bootstrap/Autocomplete @>

The default settings can be changed as well.

	<@ Automad/Bootstrap/Autocomplete {
	    inputSelector: '#search',
	    highlightClass: 'text-primary'
	} @>

## Options

Find below a complete list of available options.

| Parameter       | Default   |
|-----------------|-----------|
| `inputSelector` | "#search" |
| `treshold` | 3 |
| `highlightClass` | "text-primary" |
| `maximumItems` | 10 |