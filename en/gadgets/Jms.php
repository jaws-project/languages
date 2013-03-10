<?php
/**
 * Meta Data
 *
 * "Project-Id-Version: Jms"
 * "Last-Translator: Helgi Þormar Þorbjörnsson"
 * "Language-Team: EN"
 * "MIME-Version: 1.0"
 * "Content-Type: text/plain; charset=UTF-8"
 * "Content-Transfer-Encoding: 8bit"
 */

/* JMS */
define('_EN_JMS_NAME', "Component Management");
define('_EN_JMS_DESCRIPTION', "Manage gadgets and plugins.");

/* ACL */
define('_EN_JMS_ACL_MANAGEJMS', "Use component manager");
define('_EN_JMS_ACL_MANAGEGADGETS', "Install/Uninstall gadgets");
define('_EN_JMS_ACL_MANAGEPLUGINS', "Install/Uninstall plugins");

/* Terms */
define('_EN_JMS_INSTALL', "Install");
define('_EN_JMS_UNINSTALL', "Uninstall");
define('_EN_JMS_UPDATE', "Update");
define('_EN_JMS_DISABLE', "Disable");
define('_EN_JMS_VERSION', "Version");
define('_EN_JMS_JAWS_VERSION', "Required Jaws version");

/* Gadgets */
define('_EN_JMS_GADGETS', "Gadgets");
define('_EN_JMS_GADGETS_INSTALLED', "Installed gadgets");
define('_EN_JMS_GADGETS_INSTALLED_DESC', "There are gadgets you can uninstall.");
define('_EN_JMS_GADGETS_OUTDATED', "Outdated gadgets");
define('_EN_JMS_GADGETS_OUTDATED_DESC', "These gadgets can be updated now.");
define('_EN_JMS_GADGETS_NOTINSTALLED', "Not installed gadgets");
define('_EN_JMS_GADGETS_NOTINSTALLED_DESC', "There are gadgets waiting to be installed.");
define('_EN_JMS_GADGETS_CORE', "Core gadgets");
define('_EN_JMS_GADGETS_CORE_DESC', "Core gadgets could not be uninstalled.");
define('_EN_JMS_GADGETS_LOCATION', "Location");
define('_EN_JMS_GADGETS_DEPENDENCIES', "Dependencies");
define('_EN_JMS_GADGETS_ACL_RULES', "ACL rules");
define('_EN_JMS_GADGETS_CONFIRM_UNINSTALL', "Do you want to uninstall the gadget? This will delete data from database.");
define('_EN_JMS_GADGETS_CONFIRM_DISABLE', "Do you want to disable the gadget? This does not delete data from database.");
define('_EN_JMS_GADGETS_NOT_EXISTS', "The gadget does not exists.");
define('_EN_JMS_GADGETS_DISABLE_MAIN_FAILURE', "Cannot disable main gadget.");
define('_EN_JMS_GADGETS_ENABLE_OK', "The {0} gadget has been installed sucessfully.");
define('_EN_JMS_GADGETS_ENABLE_FAILURE', "There was a problem installing {0} gadget.");
define('_EN_JMS_GADGETS_DISABLE_OK', "The {0} gadget has been uninstalled successfully.");
define('_EN_JMS_GADGETS_DISABLE_FAILURE', "There was a problem uninstalling {0} gadget.");
define('_EN_JMS_GADGETS_UPDATE_OK', "The {0} gadget has been updated successfully.");
define('_EN_JMS_GADGETS_UPDATE_FAILURE', "There was a problem updating {0} gadget.");
define('_EN_JMS_GADGETS_UPDATE_NO_NEED', "There is no need to update the {0} gadget.");
define('_EN_JMS_GADGETS_REQUIRES_X_GADGET', "{0} requires these gadgets to be installed to work: {1}");
define('_EN_JMS_GADGETS_REQUIRES_X_DEPENDENCY', "{0} can't be {2} because {1} gadget(s) depends on it.");

/* Plugins */
define('_EN_JMS_PLUGINS', "Plugins");
define('_EN_JMS_PLUGINS_PLUGIN', "Plugin");
define('_EN_JMS_PLUGINS_INSTALLED', "Installed plugins");
define('_EN_JMS_PLUGINS_INSTALLED_DESC', "There are plugins you can uninstall.");
define('_EN_JMS_PLUGINS_NOTINSTALLED', "Not installed plugins");
define('_EN_JMS_PLUGINS_NOTINSTALLED_DESC', "There are plugins waiting to be installed.");
define('_EN_JMS_PLUGINS_USAGE', "Plugin usage");
define('_EN_JMS_PLUGINS_USAGE_DESC', "Select gadgets you want to use with this plugin:");
define('_EN_JMS_PLUGINS_NO_EXAMPLE', "No example found");
define('_EN_JMS_PLUGINS_FRIENDLY', "Friendly");
define('_EN_JMS_PLUGINS_NOT_FRIENDLY', "Not friendly");
define('_EN_JMS_PLUGINS_ACCESSKEY', "Access Key");
define('_EN_JMS_PLUGINS_NO_ACCESSKEY', "No access key found");
define('_EN_JMS_PLUGINS_USE_ALWAYS', "All Gadgets");
define('_EN_JMS_PLUGINS_UPDATED', "Your plugin settings have been updated.");
define('_EN_JMS_PLUGINS_INSTALL_OK', "The {0} plugin has been installed sucessfully.");
define('_EN_JMS_PLUGINS_INSTALL_FAILURE', "There was a problem installing {0} plugin.");
define('_EN_JMS_PLUGINS_CONFIRM_UNINSTALL', "Do you want to uninstall this plugin?");
define('_EN_JMS_PLUGINS_UNINSTALL_OK', "The {0} plugin has been uninstalled sucessfully.");
define('_EN_JMS_PLUGINS_UNINSTALL_FAILURE', "Could not disable plugin");
define('_EN_JMS_PLUGINS_PLUGIN_DOESNT_EXISTS', "The {0} plugin does not exists.");
define('_EN_JMS_PLUGINS_PLUGIN_CANT_HAVE_NAME_CORE', "The plugin can't have the name Core, it's reserved for Jaws.");
