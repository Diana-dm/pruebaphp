<?php
require_once "controllers/template.controller.php";
require_once "controllers/form.controller.php";
require_once  "models/form.model.php";

$template = new TemplateController();

$template->getTemplate();