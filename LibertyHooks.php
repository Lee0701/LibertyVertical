<?php //phpcs:ignore
class LibertyVerticalHooks extends Hooks {
	/**
	 * Preference
	 * @param User $user user
	 * @param Preferences &$preferences preferences
	 */
	public static function onGetPreferences( $user, &$preferences ) {
		$preferences['liberty-color-main'] = [
			'type' => 'text',
			'label-message' => 'liberty-pref-color-main',
			'section' => 'liberty/color',
			'help-message' => 'liberty-pref-color-main-help'
		];

		$preferences['liberty-color-second'] = [
			'type' => 'text',
			'label-message' => 'liberty-pref-color-second',
			'section' => 'liberty/color',
			'help-message' => 'liberty-pref-color-second-help'
		];

		$preferences['liberty-dark'] = [
			'type' => 'select',
			'label-message' => 'liberty-pref-dark',
			'section' => 'liberty/color',
			'options' => [
				wfMessage( 'liberty-dark-default' )->text() => null,
				wfMessage( 'liberty-dark-dark' )->text() => 'dark',
				wfMessage( 'liberty-dark-light' )->text() => 'light'
			],
			'help-message' => 'liberty-pref-dark-help',
			'default' => null
		];
	}
}
