<?php

/**
 * drugs actions.
 *
 * @package    medicine
 * @subpackage drugs
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class drugsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->medicine_drugss = Doctrine_Core::getTable('MedicineDrugs')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->medicine_drugs = Doctrine_Core::getTable('MedicineDrugs')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->medicine_drugs);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MedicineDrugsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MedicineDrugsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($medicine_drugs = Doctrine_Core::getTable('MedicineDrugs')->find(array($request->getParameter('id'))), sprintf('Object medicine_drugs does not exist (%s).', $request->getParameter('id')));
    $this->form = new MedicineDrugsForm($medicine_drugs);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($medicine_drugs = Doctrine_Core::getTable('MedicineDrugs')->find(array($request->getParameter('id'))), sprintf('Object medicine_drugs does not exist (%s).', $request->getParameter('id')));
    $this->form = new MedicineDrugsForm($medicine_drugs);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($medicine_drugs = Doctrine_Core::getTable('MedicineDrugs')->find(array($request->getParameter('id'))), sprintf('Object medicine_drugs does not exist (%s).', $request->getParameter('id')));
    $medicine_drugs->delete();

    $this->redirect('drugs/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $medicine_drugs = $form->save();

      $this->redirect('drugs/edit?id='.$medicine_drugs->getId());
    }
  }
}
