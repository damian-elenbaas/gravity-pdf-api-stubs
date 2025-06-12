<?php

/**
 * An easy-to-use API developers can use to work with Gravity PDF
 *
 * See https://docs.gravitypdf.com/v6/developers/api/whats-it-for/ for more information about this API
 *
 * @since 4.0
 */
final class GPDFAPI
{
    /**
     * Returns our public logger class which uses Monolog (a PSR-3 compatible logging interface - https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md)
     *
     * Log messages can be added with any of the following:
     *
     * $gfpdf->log->debug( $message, [$parameters = array()] )
     * $gfpdf->log->info( $message, [$parameters = array()] )
     * $gfpdf->log->notice( $message, [$parameters = array()] )
     * $gfpdf->log->warning( $message, [$parameters = array()] )
     * $gfpdf->log->error( $message, [$parameters = array()] )
     * $gfpdf->log->critical( $message, [$parameters = array()] )
     * $gfpdf->log->alert( $message, [$parameters = array()] )
     * $gfpdf->log->emergency( $message, [$parameters = array()] )
     *
     * When in production Gravity PDF will only log to a file when the Gravity Forms Logging plugin is enabled and Gravity PDF is set to "Log errors only" ($log->addError() or higher) or "Log all messages" ($log->addNotice() or higher)
     *
     * See https://docs.gravitypdf.com/v6/developers/api/get_log_class/ for more information about this method
     *
     * @return \Psr\Log\LoggerInterface
     *
     * @since 4.0
     */
    public static function get_log_class()
    {
    }
    /**
     * Returns our public notice queue system to make it easy to display errors and messages to the user.
     *
     * Usage:
     * $notices->add_notice( String $message );
     * $notices->add_error( String $error );
     *
     * This taps into the 'admin_notices' or 'network_admin_notices' WordPress hooks so you need to add your notices before then.
     *
     * See https://docs.gravitypdf.com/v6/developers/api/get_notice_class/ for more information about this method
     *
     * @return \GFPDF\Helper\Helper_Notices
     *
     * @since 4.0
     */
    public static function get_notice_class()
    {
    }
    /**
     * Returns our public data class which we use to store important global information related to Gravity PDF
     *
     * This uses PHP magic methods __set() and __get() to access and store information.
     *
     * Usage:
     *
     * $data->title; //returns "Gravity PDF"
     * $data->title = 'Gravity PDF 4.0'; //sets $data->title to "Gravity PDF 4.0"
     *
     * Note: Our __get() magic method returns variables by reference
     *
     * See https://docs.gravitypdf.com/v6/developers/api/get_data_class for more information about this method
     *
     * @return \GFPDF\Helper\Helper_Data
     *
     * @since 4.0
     */
    public static function get_data_class()
    {
    }
    /**
     * Returns our access layer class for all Gravity PDF Settings (both global and form specific)
     *
     * Note: Most relevant methods have been broken our and are avaiable through the GPDFAPI directly (GPDFAPI::get_pdf, GPDFAPI::get_plugin_settings ect)
     *
     * See https://docs.gravitypdf.com/v6/developers/api/get_options_class/ for more information about this method
     *
     * @return \GFPDF\Helper\Helper_Options_Fields
     *
     * @since 4.0
     */
    public static function get_options_class()
    {
    }
    /**
     * Returns our miscellaneous methods (or common methods) used throughout the plugin.
     *
     * Usage:
     *
     * $misc->is_gfpdf_page();
     *
     * See https://docs.gravitypdf.com/v6/developers/api/get_misc_class/ for more information about this method
     *
     * @return \GFPDF\Helper\Helper_Misc
     *
     * @since 4.0
     */
    public static function get_misc_class()
    {
    }
    /**
     * Returns our templates methods used throughout the plugin.
     *
     * Usage:
     *
     * $templates->get_all_templates();
     *
     * See https://docs.gravitypdf.com/v6/developers/api/get_templates_class/ for more information about this method
     *
     * @return \GFPDF\Helper\Helper_Templates
     *
     * @since 4.1
     */
    public static function get_templates_class()
    {
    }
    /**
     * Returns our abstracted Gravity Forms API class we use throughout the plugin
     *
     * While you could just use the GFAPI directly, some methods in this class have been cache-optimised and are specifically tuned for Gravity PDF.
     * Note: not all the methods in the GFAPI are implimented.
     *
     * Usage:
     *
     * $gform->get_form( $form_id );
     *
     * See https://docs.gravitypdf.com/v6/developers/api/get_form_class/ for more information about this method
     *
     * @return \GFPDF\Helper\Helper_Form
     *
     * @since 4.0
     */
    public static function get_form_class()
    {
    }
    /**
     * Returns the original Model/View/Controller class we initialised in our /src/bootstrap.php file
     *
     * This method acts like a faux singleton provider (but none of our classes are static or singletons themselves - hence the 'faux') as you get the originally initialised class back
     *
     * This is very useful when you want to remove any filters / actions we set in a controller's add_filters() or add_actions() methods
     * You can also use to to easily access any public methods in our classes
     *
     * Note: This method only returns Controller_ / Model_ / View_  classes. Use the other methods above to access our Helper_ classes
     *
     * Usage:
     *
     * $class = GPDFAPI::get_mcv_class( 'Controller_PDF' );
     *
     * //if we have a class returned
     * if( $class !== false ) {
     *     //remove a middleware filter
     *     remove_filter( 'gfpdf_pdf_middleware', array( $class, 'middle_active' ), 10 );
     * }
     *
     * See https://docs.gravitypdf.com/v6/developers/api/get_mvc_class/ for more information about this method
     *
     * @param string $class_name The name of one of our MVC classes (no namespace)
     *
     * @return object|bool Will return your object if found, otherwise false
     *
     * @since 4.0
     */
    public static function get_mvc_class($class_name)
    {
    }
    /**
     * Returns a new instance of one of our PDF generating code (model or view)
     *
     * @param  string $type Type of class to return. Valid options include 'view' or 'model'
     *
     * @return object|WP_Error
     *
     * @since  4.0
     */
    public static function get_pdf_class($type = 'view')
    {
    }
    /**
     * Gets a list of current PDFs setup for a particular Gravity Form
     *
     * See https://docs.gravitypdf.com/v6/developers/api/get_form_pdfs/ for more information about this method
     *
     * @param  int $form_id The Gravity Form ID
     *
     * @return array|WP_Error Array of PDF settings or WP_Error
     *
     * @since 4.0
     */
    public static function get_form_pdfs($form_id)
    {
    }
    /**
     * Gets a list of current PDFs setup for a particular Entry
     * This differs from \GPDFAPI::get_form_pdfs() as it'll filter out any PDFs that don't pass the conditional logic
     * for the current entry.
     *
     * See https://docs.gravitypdf.com/v6/developers/api/get_entry_pdfs/ for more information about this method
     *
     * @param int $entry_id The Gravity Forms Entry ID
     *
     * @return array|WP_Error Array of PDFs available to the entry or WP_Error
     *
     * @since 6.0
     */
    public static function get_entry_pdfs($entry_id)
    {
    }
    /**
     * Gets a specific Gravity Form PDF configuration
     *
     * See https://docs.gravitypdf.com/v6/developers/api/get_pdf/ for more information about this method
     *
     * @param  integer $form_id The Gravity Form ID
     * @param  string  $pdf_id  The PDF ID
     *
     * @return array|WP_Error Array of PDF settings or WP_Error
     * @since 4.0
     */
    public static function get_pdf($form_id, $pdf_id)
    {
    }
    /**
     * Add a new PDF to a Gravity Form
     *
     * See https://docs.gravitypdf.com/v6/developers/api/add_pdf/ for more information about this method
     *
     * @param integer $form_id  The Gravity Form ID
     * @param array   $settings The settings for the PDF
     *
     * @return boolean / String The PDF ID on success, false on failure
     *
     * @since 4.0
     */
    public static function add_pdf($form_id, $settings = [])
    {
    }
    /**
     * Updates an existing Gravity Form PDF. Passing an empty $settings array will delete the PDF
     *
     * See https://docs.gravitypdf.com/v6/developers/api/update_pdf/ for more information about this method
     *
     * @param  integer $form_id  The Gravity Form ID
     * @param  string  $pdf_id   The PDF ID
     * @param  array   $settings The settings for the PDF
     *
     * @return boolean           True on success, false on failure
     *
     * @since  4.0
     */
    public static function update_pdf($form_id, $pdf_id, $settings = [])
    {
    }
    /**
     * Deletes a specific Gravity Form PDF configuration
     *
     * See https://docs.gravitypdf.com/v6/developers/api/delete_pdf/ for more information about this method
     *
     * @param  integer $form_id The Gravity Form ID
     * @param  string  $pdf_id  The PDF ID
     *
     * @return boolean          True on success, false on failure
     *
     * @since  4.0
     */
    public static function delete_pdf($form_id, $pdf_id)
    {
    }
    /**
     * Retrieve an array of the global Gravity PDF settings (this doesn't include individual form configuration details - see GPDFAPI::get_form_pdfs)
     *
     * See https://docs.gravitypdf.com/v6/developers/api/get_plugin_settings/ for more information about this method
     *
     * @return array
     *
     * @since 4.0
     */
    public static function get_plugin_settings()
    {
    }
    /**
     * Get an option from the global Gravity PDF settings. If it doesn't exist the $default value will be returned
     *
     * See https://docs.gravitypdf.com/v6/developers/api/get_plugin_option/ for more information about this method
     *
     * @param string $key           The Gravity PDF option key
     * @param mixed  $default_value What's returned if the option doesn't exist
     *
     * @return mixed
     *
     * @since 4.0
     */
    public static function get_plugin_option($key, $default_value = '')
    {
    }
    /**
     * Add a new Global option to Gravity PDF
     *
     * If option already exists a WP_Error is returned
     * In most cases you'll want to use GPDFAPI::update_plugin_option() instead
     *
     * See https://docs.gravitypdf.com/v6/developers/api/add_plugin_option/ for more information about this method
     *
     * @param string $key The option key to add
     * @param mixed  $value
     *
     * @return boolean|WP_Error
     *
     * @since 4.0
     */
    public static function add_plugin_option($key, $value)
    {
    }
    /**
     * Updates a Gravity PDF global option. Will create option if it doesn't exist.
     *
     * If $value is falsy (determined by empty() ) the option is deleted.
     *
     * See https://docs.gravitypdf.com/v6/developers/api/update_plugin_option/ for more information about this method
     *
     * @param string $key The option key to update
     * @param mixed  $value
     *
     * @return boolean|WP_Error
     *
     * @since 4.0
     */
    public static function update_plugin_option($key, $value)
    {
    }
    /**
     * Delete's a Gravity PDF global option.
     *
     * See https://docs.gravitypdf.com/v6/developers/api/delete_plugin_option/ for more information about this method
     *
     * @param string $key The option key to delete
     *
     * @return boolean
     *
     * @since 4.0
     */
    public static function delete_plugin_option($key)
    {
    }
    /**
     * When provided the Gravity Form entry ID and PDF ID, this method will correctly generate the PDF, save it to disk,
     * trigger appropriate actions and return the absolute path to the PDF.
     *
     * See https://docs.gravitypdf.com/v6/developers/api/create_pdf/ for more information about this method
     *
     * @param  integer $entry_id The Gravity Form entry ID
     * @param  string  $pdf_id   The Gravity PDF ID number (the pid number in the URL when viewing a setting in the admin area)
     *
     * @return mixed            Return the full path to the PDF, or a WP_Error on failure
     *
     * @since 4.0
     */
    public static function create_pdf($entry_id, $pdf_id)
    {
    }
    /**
     * Generates the current entry's HTML product table
     *
     * See https://docs.gravitypdf.com/v6/developers/api/product_table/ for more information about this method
     *
     * @param  array   $entry         The Gravity Form entry
     * @param  boolean $should_return Whether to output or return the HTML
     *
     * @return string|void     The product table or null
     *
     * @since  4.0
     */
    public static function product_table($entry, $should_return = \false)
    {
    }
    /**
     * Generates a likert table
     *
     * See https://docs.gravitypdf.com/v6/developers/api/likert_table for more information about this method
     *
     * @param  array   $entry         The Gravity Form entry
     * @param  integer $field_id      The likert field ID
     * @param  boolean $should_return Whether to output or return the HTML
     *
     * @return Mixed    The likert table or null
     *
     * @since  4.0
     */
    public static function likert_table($entry, $field_id, $should_return = \false)
    {
    }
    /**
     * Returns an array of all installed fonts
     *
     * @return array
     *
     * @since 4.3
     */
    public static function get_pdf_fonts()
    {
    }
    /**
     * Installs a PDF font on the file system
     *
     * See https://docs.gravitypdf.com/v6/developers/api/add_pdf_font/ for more information about this method
     *
     * @param array $font The font information to add.
     *
     * This array needs to be in the following format:
     *
     * Array (
     *   'font_name'   => 'Lato',
     *   'regular'     => '/full/path/to/font/Lato-Regular.ttf',
     *   'italics'     => '/full/path/to/font/Lato-Italic.ttf',
     *   'bold'        => '/full/path/to/font/Lato-Bold.ttf',
     *   'bolditalics' => '/full/path/to/font/Lato-BoldItalic.ttf',
     * )
     *
     * Only the 'font_name' and 'regular' keys are required.
     * All fonts should be referenced with the full server path.
     * Currently, only .ttf fonts are supported.
     * The font name can only contain alphanumeric characters, or a space
     *
     * @return bool|WP_Error
     *
     * @since 4.1
     */
    public static function add_pdf_font($font)
    {
    }
    /**
     * Deletes one of the v4 fonts that is installed
     *
     * See https://docs.gravitypdf.com/v6/developers/api/delete_pdf_font for more information about this method
     *
     * @param string $font_id The font that should be deleted
     *
     * @return bool|WP_Error
     *
     * @Internal In 6.0 the method signature was changed from $font_name to $font_id. This ensures accuracy, as multiple
     * fonts can now contain the same name in the 6.0 release.
     *
     * @since    4.1
     */
    public static function delete_pdf_font($font_id)
    {
    }
    /**
     * Return the $form_data array used in custom PDF templates
     *
     * @param int $entry_id
     *
     * @return array|WP_Error
     *
     * @since 4.4
     */
    public static function get_form_data($entry_id)
    {
    }
}