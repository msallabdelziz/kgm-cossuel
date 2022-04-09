<?php
    namespace App\Entity\Traits;
    use Doctrine\ORM\Mapping as ORM;

    trait createdAtTrait {

        #[ORM\Column(type: 'datetime_immutable')]
        private $created_at;

        #[ORM\Column(type: 'string')]
        private $created_by;

        #[ORM\Column(type: 'datetime_immutable', nullable:true)]
        private $updated_at;

        #[ORM\Column(type: 'string', nullable:true)]
        private $updated_by;

        public function getCreatedAt(): ?\DateTimeImmutable
        {
            return $this->created_at;
        }

        public function setCreatedAt(\DateTimeImmutable $created_at): self
        {
            $this->created_at = $created_at;
            return $this;
        }

        public function getUpdatedAt(): ?\DateTime
        {
            return $this->updated_at;
        }

        public function setUpdatedAt(\DateTime $updated_at): self
        {
            $this->created_at = $updated_at;
            return $this;
        }

        public function getCreatedby(): ?string
        {
            return $this->created_at;
        }

        public function setCreatedby(string $created_by): self
        {
            $this->created_at = $created_by;
            return $this;
        }

        public function getUpdateBy(): ?string
        {
            return $this->updated_by;
        }

        public function setUpdateBy(string $updated_by): self
        {
            $this->updated_by = $updated_by;
            return $this;
        }

    }
