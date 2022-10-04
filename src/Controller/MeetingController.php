<?php

namespace App\Controller;
use App\Repository\CalendarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeetingController extends AbstractController
{
    /**
     * @Route("/meeting", name="app_meeting")
     */
    public function index(CalendarRepository $calendar):Response
    {
        $events = $calendar->findAll();

        $rdvs = array();
        foreach ($events as $event) {
            $rdvs[] = array(
                'id' => $event->getId(),
                'start' => $event->getStart()->format('Y-m-d H:i:s'),
                'end' => $event->getEnd()->format('Y-m-d H:i:s'),
                'title' => $event->getTitle(),
                'description' => $event->getDescription(),
                'allDay' => $event->isAllDay(),
                'backgroundColor' => $event->getBackgroundColor(),
                'borderColor' => $event->getBorderColor(),
                'textColor' => $event->getTextColor(),
                
                
            );
        }
        $re =  json_encode($rdvs);

        return $this->render('meeting/index.html.twig', compact('re'));
    }
}
