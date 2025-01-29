"use client";
import React, { useState, useRef } from "react";
import ProjectCard from "./ProjectCard";
import ProjectTag from "./ProjectTag";
import { motion, useInView } from "framer-motion";

const projectsData = [
  {
    id: 1,
    title: "Design",
    description: "Creation of a photoshop mock-up according to specifications",
    image: "/images/projects/design.jpg",
    tag: ["All", "Web"],
    gitUrl: "https://github.com/Leily67/Design",
    previewUrl: "/",
  },
  {
    id: 2,
    title: "Mock-up",
    description: "Reproduction of a mock-up in html/css from a pdf file",
    image: "/images/projects/maquette.png",
    tag: ["All", "Web"],
    gitUrl: "https://github.com/Leily67/Maquette",
    previewUrl: "/",
  },
  {
    id: 3,
    title: "NiphePix",
    description: "My first Website",
    image: "/images/projects/niphe.png",
    tag: ["All", "Web"],
    gitUrl: "https://github.com/Leily67/NiphePix",
    previewUrl: "/",
  },
  {
    id: 4,
    title: "Force 4",
    description: "Creation of a power 4 in html JS/jQuery",
    image: "/images/projects/puissance4.png",
    tag: ["All", "Web"],
    gitUrl: "https://github.com/Leily67/Puissance-4",
    previewUrl: "/",
  },
  {
    id: 5,
    title: "Pokemon",
    description: "Creating a pokedex using an API",
    image: "/images/projects/pokemon.png",
    tag: ["All", "Web"],
    gitUrl: "/",
    previewUrl: "/",
  },
  {
    id: 6,
    title: "Wysiwig",
    description: "Creating a text editor in jQuery",
    image: "/images/projects/wysiwyg.png",
    tag: ["All", "Web"],
    gitUrl: "https://github.com/Leily67/Wysiwyg",
    previewUrl: "/",
  },
];

const ProjectsSection = () => {
  const [tag, setTag] = useState("All");
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true });

  const handleTagChange = (newTag) => {
    setTag(newTag);
  };

  const filteredProjects = projectsData.filter((project) =>
    project.tag.includes(tag)
  );

  const cardVariants = {
    initial: { y: 50, opacity: 0 },
    animate: { y: 0, opacity: 1 },
  };

  return (
    <section id="projects">
      <h2 className="text-center text-4xl font-bold text-white mt-4 mb-8 md:mb-12">
        My Projects
      </h2>
      <div className="text-white flex flex-row justify-center items-center gap-2 py-6">
        <ProjectTag
          onClick={handleTagChange}
          name="All"
          isSelected={tag === "All"}
        />
        <ProjectTag
          onClick={handleTagChange}
          name="Web"
          isSelected={tag === "Web"}
        />
        <ProjectTag
          onClick={handleTagChange}
          name="Mobile"
          isSelected={tag === "Mobile"}
        />
      </div>
      <ul ref={ref} className="grid md:grid-cols-3 gap-8 md:gap-12">
        {filteredProjects.map((project, index) => (
          <motion.li
            key={index}
            variants={cardVariants}
            initial="initial"
            animate={isInView ? "animate" : "initial"}
            transition={{ duration: 0.3, delay: index * 0.4 }}
          >
            <ProjectCard
              key={project.id}
              title={project.title}
              description={project.description}
              imgUrl={project.image}
              gitUrl={project.gitUrl}
              previewUrl={project.previewUrl}
            />
          </motion.li>
        ))}
      </ul>
    </section>
  );
};

export default ProjectsSection;