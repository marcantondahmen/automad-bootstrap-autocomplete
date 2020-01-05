function onSelectItem(item, element) {
	$(autocomplete.inputSelector).closest('form').submit();
}
		
$(autocomplete.inputSelector).autocomplete({
	source: autocomplete.data,
	onSelectItem: onSelectItem,
	highlightClass: autocomplete.highlightClass,
	treshold: autocomplete.treshold,
	maximumItems: autocomplete.maximumItems
});