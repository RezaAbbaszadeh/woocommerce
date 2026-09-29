<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

use Automattic\WooCommerce\Admin\Notes\Note;

class UnsecuredReportFiles {
    const NOTE_NAME = 'wc-admin-remove-unsecured-report-files';

    /**
     * @return Note|null
     */
    public static function get_note() {}

    /**
     * @return void
     */
    public static function possibly_add_note() {}

    /**
     * @return bool
     */
    public static function note_exists() {}
}
