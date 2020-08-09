import React from 'react';


const styles = {
    appLabel: {
        fontSize: '20pt',
        fontFamily: 'cursive'
    }
};


export default class AuthWidget extends React.Component {
    appLogo = "/images/sentiment.png";

    render() {
        return (
            <div className="row nice-top-space">
                <div className="col-sm-4"/>
                <div className="col-sm-4">
                    <div className="clearfix">
                        <span className="float-left" style={styles.appLabel}>
                            Sentiments
                        </span>
                        <span className="float-right">
                            <img src={this.appLogo} alt="sentiment logo" className="img-fluid logo-sm"/>
                        </span>
                    </div>
                    <div className="mt-2">
                        <blockquote className="text-center">
                            “ All the beautiful things i want to say to you but don't know how! "
                        </blockquote>
                        <div className="card shadow nice-card">
                            <div className="card-body">
                                <form action="">
                                    <div className="form-group">
                                        <label htmlFor="username">Key</label>
                                        <div className="form-row">
                                            <div className="col">
                                                <input type="text" className="form-control form-control-sm"/>
                                            </div>
                                            <div className="col">
                                                <input type="text" className="form-control form-control-sm"/>
                                            </div>
                                            <div className="col">
                                                <input type="text" className="form-control form-control-sm"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="form-group">
                                        <button className="btn-primary btn-sm btn">
                                            <i className="fa fa-unlock-alt"/>&nbsp;Open
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {/*<!-- ./ sign in widget --> */}
                        <hr/>
                        <div className="clearfix">
                            <span className="float-left">
                                &copy; {new Date().getFullYear()}&nbsp;&middot; sentiments
                            </span>
                            <span className="float-right">
                                A labor of love <i className="fa fa-heart text-danger"/>
                            </span>
                        </div>
                    </div>
                </div>
                <div className="col-sm-4"/>
            </div>
        )
    }
}
