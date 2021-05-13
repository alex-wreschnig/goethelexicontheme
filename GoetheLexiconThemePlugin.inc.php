<?php

/**
 * Goethe-Lexicon Theme Plugin was originally developed for the Goethe-Lexicon website.
 * @file plugins/themes/default/GoetheLexiconThemePlugin.inc.php 
 * 
 * Copyright 2020-2021 University of Pittsburgh
 * 
 * It's based on the Bootstrap 3 plugin originally developed by John Willinksy.
 *
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class GoetheLexiconThemePlugin
 * @ingroup plugins_themes_bootstrap3
 *
 * @brief Bootstrap-3-derived theme for the Goethe Lexicon.
 */

import('lib.pkp.classes.plugins.ThemePlugin');
class GoetheLexiconThemePlugin extends ThemePlugin {
	/**
	 * Initialize the theme
	 *
	 * @return null
	 */
	public function init() {

		// Use the parent theme's unique plugin slug
        $this->setParent('bootstrapthreethemeplugin');
        // This theme depends on the cleanblog styles from the bootstrap3 theme, so we're making
        // sure to include them here. This includes a LESS file that imports the cleanblog
        // LESS from the bootstrap theme.
        $this->addStyle('bootstrapCleanBlogStylesheet', 'styles/cleanblog-import.less');
	}

	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	function getDisplayName() {
		return __('plugins.themes.goethelexicontheme.name');
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return __('plugins.themes.goethelexicontheme.description');
	}
}
