class PnjsController < ApplicationController
    def index
      @pnjs = Pnj.all
    end
  
    def show
      @pnj = Pnj.find(params[:id])
    end
  
    def new
      @pnj = Pnj.new
    end
  
    def create
      @pnj = Pnj.new(pnj_params)
  
      if @pnj.save
        redirect_to @pnj, notice: 'Le PNJ a été créé avec succès.'
      else
        render :new
      end
    end
  
    def edit
      @pnj = Pnj.find(params[:id])
    end
  
    def update
      @pnj = Pnj.find(params[:id])
  
      if @pnj.update(pnj_params)
        redirect_to @pnj, notice: 'Le PNJ a été mis à jour avec succès.'
      else
        render :edit
      end
    end
  
    def destroy
      @pnj = Pnj.find(params[:id])
      @pnj.destroy
      redirect_to pnjs_path, notice: 'Le PNJ a été supprimé avec succès.'
    end
  
    private
  
    def pnj_params
      params.require(:pnj).permit(:name, :avatar, :vie, :force)
    end
      
  end
  