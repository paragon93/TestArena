<?php
/*
Copyright © 2014 TestArena

This file is part of TestArena.

TestArena is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

The full text of the GPL is in the LICENSE file.
*/
class Administration_Form_ExportProject extends Custom_Form_Abstract
{
  public function init()
  {
    parent::init();
    
    $this->addElement('checkbox', 'exportEnvironments', array(
      'value' => true,
      'class' => 'j_exportItem'
    ));
    
    $this->addElement('checkbox', 'exportReleases', array(
      'value' => true,
      'class' => 'j_exportItem'
    ));
    
    $this->addElement('checkbox', 'exportRoles', array(
      'value' => true,
      'class' => 'j_exportItem'
    ));
    
    $this->addElement('checkbox', 'exportTasks', array(
      'value' => true,
      'class' => 'j_exportItem'
    ));
    
    $this->addElement('checkbox', 'exportVersions', array(
      'value' => true,
      'class' => 'j_exportItem'
    ));
    
    $this->addElement('checkbox', 'exportTags', array(
      'value' => true,
      'class' => 'j_exportItem'
    ));
    
    $this->addElement('checkbox', 'exportUsers', array(
      'value' => true,
      'class' => 'j_exportItem'
    ));
    
    $this->addElement('hash', 'csrf', array(
      'ignore'  => true,
      'salt'    => 'export_project',
      'timeout' => 600
    ));
  }
}