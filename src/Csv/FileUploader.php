<?php

namespace App\Csv;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class FileUploader
{
    private string $targetDirectory;
    private SluggerInterface $slugger;

    public function __construct(string $targetDirectory, SluggerInterface $slugger)
    {
        $this->targetDirectory = $targetDirectory;
        $this->slugger = $slugger;
    }

    public function upload(UploadedFile $file): string
    {
        $originalFilename = \pathinfo($file->getClientOriginalName(), \PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename.'-'.\uniqid('', true).'.'.$file->guessExtension();

        try {
            $file->move($this->getTargetDirectory(), $fileName);
        } catch (FileException $e) {
        }

        return $fileName;
    }

    final public function getTargetDirectory(): string
    {
        return $this->targetDirectory;
    }
}