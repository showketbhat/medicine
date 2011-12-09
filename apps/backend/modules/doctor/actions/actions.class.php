<?php

/**
 * doctor actions.
 *
 * @package    medicine
 * @subpackage doctor
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class doctorActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->medicine_doctors = Doctrine_Core::getTable('MedicineDoctor')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->medicine_doctor = Doctrine_Core::getTable('MedicineDoctor')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->medicine_doctor);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MedicineDoctorForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MedicineDoctorForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($medicine_doctor = Doctrine_Core::getTable('MedicineDoctor')->find(array($request->getParameter('id'))), sprintf('Object medicine_doctor does not exist (%s).', $request->getParameter('id')));
    $this->form = new MedicineDoctorForm($medicine_doctor);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($medicine_doctor = Doctrine_Core::getTable('MedicineDoctor')->find(array($request->getParameter('id'))), sprintf('Object medicine_doctor does not exist (%s).', $request->getParameter('id')));
    $this->form = new MedicineDoctorForm($medicine_doctor);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($medicine_doctor = Doctrine_Core::getTable('MedicineDoctor')->find(array($request->getParameter('id'))), sprintf('Object medicine_doctor does not exist (%s).', $request->getParameter('id')));
    $medicine_doctor->delete();

    $this->redirect('doctor/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $medicine_doctor = $form->save();

      $this->redirect('doctor/edit?id='.$medicine_doctor->getId());
    }
  }
}
