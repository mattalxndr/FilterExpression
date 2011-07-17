<?php

class FilterExpression
{
	public $adjectives, $noun, $thats;

	public function getString()
	{
		$adjectiveString = self::getFormattedList($this->adjectives, 'and');

		$thatsString = self::getFormattedList($this->thats, 'and');

		$expression = '';
		$expression = $this->noun;
		if ($adjectiveString)
			$expression = $adjectiveString.' '.$expression;
		if ($thatsString)
			$expression .= ' that '.$thatsString;

		if ($expression === $this->noun)
			$expression = 'all '.$expression;

		$expression = ucfirst($expression);

		return $expression;
	}

	public static function getFormattedList($items, $andOr = 'and')
	{
		$count = count($items);

		if ($count === 0)
			return '';

		if ($count === 1)
			return reset($items);

		if ($count > 1) {
			$comma = $count === 2 ? '' : ',';
			$allButLast = array_slice($items, 0, -1);
			$expression = implode(', ', $allButLast).$comma.' '.$andOr.' '.end($items);
			return $expression;
		}
	}
