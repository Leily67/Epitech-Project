"use client";
import React, { useTransition, useState } from "react";
import Image from "next/image";
import TabButton from "./TabButton";

const TAB_DATA = [
    {
        title: "Skills",
        id: "skills",
        content: (
            <ul className="list-disc pl-2">
                <li>JavaScript</li>
                <li>ReactJS</li>
                <li>Vue3</li>
                <li>HTML5/CSS3</li>
                <li>MySQL</li>
                <li>Gitlab</li>
            </ul>
        )
    },
    {
        title: "Education",
        id: "education",
        content: (
            <ul className="list-disc pl-2">
                <li>Master of Science - Business & Technology Management - 2026</li>
                <li>Integrator - web developer certification - 2023</li>
            </ul>
        )
    },
    {
        title: "Experiences",
        id: "experiences",
        content: (
            <ul className="list-disc pl-2">
                <li>ALSACREATIONS - February to September 2023 : Front-end web developer in alternated training</li>
            </ul>
        )
    }
]

const AboutSection = () => {
    const [tab, setTab] = useState("skills");
    const [isPending, startTransition] = useTransition();

    const handleTabChange = (id) => {
        startTransition(() => {
            setTab(id);
        });
    }

    return <section className="text-white" id="about">
        <div className="md:grid md:grid-cols-2 gap-8 items-center py-8 px-4 xl:gap-16 sm:py-16 xl:px-16">
            <Image
            className="rounded-full border-2 border-white"
            src="/images/profil.jpg"
            alt="profil"
            width={500}
            height={500} 
            />
            <div className="mt-4 md:mt-0 text-left flex flex-col h-full">
                <h2 className="text-4x1 font-bold text-white mb-4">About Me</h2>
                <p className="text-base lg:text-lg">
                    I am a Front-end web developer with a passion for creating website.
                    I have experience working with JavaScript, React, Vue, SQL, HTML, CSS and Git.
                    I am excited to work with others to create amazing applications.
                </p>
                <div className="flex flex-row justify-start mt-8">
                    <TabButton selectTab={() => handleTabChange("skills")}
                    active={tab === "skills"}
                    >
                        {" "}
                        Skills{" "}
                    </TabButton>
                    <TabButton selectTab={() => handleTabChange("education")}
                    active={tab === "education"}
                    >
                        {" "}
                        Educations{" "}
                    </TabButton>
                    <TabButton selectTab={() => handleTabChange("experiences")}
                    active={tab === "experiences"}
                    >
                        {" "}
                        Experiences{" "}
                    </TabButton>
                </div>
                <div className="mt-8">
                    {TAB_DATA.find((t) => t.id === tab).content}
                </div>
            </div>
        </div>
    </section>
};

export default AboutSection;