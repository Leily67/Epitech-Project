class ObjetsController < ApplicationController
    def index
      @objets = Objet.all
    end
  
    def show
      @objet = Objet.find(params[:id])
    end
  
    def new
      @objet = Objet.new
    end
  
    def create
      @objet = Objet.new(objet_params)
  
      if @objet.save
        redirect_to @objet, notice: 'Votre item a été créé avec succès.'
      else
        render :new
      end
    end
  
    def edit
      @objet = Objet.find(params[:id])
    end
  
    def update
      @objet = Objet.find(params[:id])
  
      if @objet.update(objet_params)
        redirect_to @objet, notice: 'Votre item a été mis à jour avec succès.'
      else
        render :edit
      end
    end
  
    def destroy
      @objet = Objet.find(params[:id])
      @objet.destroy
      redirect_to objets_path, notice: 'Votre item a été supprimé avec succès.'
    end
  
    private
  
    def objet_params
      params.require(:objet).permit(:name, :avatar, :obj_type, :vie, :force, :xp)
    end
      
  end
  