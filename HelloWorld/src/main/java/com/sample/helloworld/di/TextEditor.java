package com.sample.helloworld.di;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class TextEditor {
	private SpellChecker spell;
	
	@Autowired
	public TextEditor( SpellChecker spellcheck)
	{
		System.out.println("Inside TextEditor");
		this.spell=spellcheck;
	}
	public String doSpellCheck()
	{
		 return spell.spellcheck();
	}
}
