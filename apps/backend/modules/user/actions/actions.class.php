<?php

/**
 * user actions.
 *
 * @package    medicine
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->medicine_users = Doctrine_Core::getTable('MedicineUser')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->medicine_user = Doctrine_Core::getTable('MedicineUser')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->medicine_user);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MedicineUserForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MedicineUserForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($medicine_user = Doctrine_Core::getTable('MedicineUser')->find(array($request->getParameter('id'))), sprintf('Object medicine_user does not exist (%s).', $request->getParameter('id')));
    $this->form = new MedicineUserForm($medicine_user);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($medicine_user = Doctrine_Core::getTable('MedicineUser')->find(array($request->getParameter('id'))), sprintf('Object medicine_user does not exist (%s).', $request->getParameter('id')));
    $this->form = new MedicineUserForm($medicine_user);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($medicine_user = Doctrine_Core::getTable('MedicineUser')->find(array($request->getParameter('id'))), sprintf('Object medicine_user does not exist (%s).', $request->getParameter('id')));
    $medicine_user->delete();

    $this->redirect('user/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $medicine_user = $form->save();

      $this->redirect('user/edit?id='.$medicine_user->getId());
    }
  }
  
  public function executeLogin(sfWebRequest $request)
  {

  }
  
}
